<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Musica;
use \Illuminate\Session\SessionManager;
use Spotify;

class FormularioDeBusca extends Component
{

    public $lista;
    public $busca;
    public $exibirCabecalhoResposta;
    public $favoritos;

    protected $listeners = ['addFav'];

    public function mount(SessionManager $session)
    {
        //$session->flush();
        $this->lista = [];
        $this->busca = "";
        $this->exibirCabecalhoResposta = false;
        $this->favoritos = ($session->has("favoritos"))
                ?$session->get("favoritos")
                :[];
    }

    public function render()
    {
        return view('livewire.formulario-de-busca');
    }

    public function buscar()
    {
        $this->exibirCabecalhoResposta = true;
        $this->lista = [];
        $id_artista = [];
        
        $aux = Spotify::searchTracks($this->busca)->get();

        $nome_artista = [];

        foreach($aux["tracks"]["items"] as $item)
        {

            foreach($item["artists"] as $cantor)
            {
                $nome_artista[] = $cantor["name"];
                $id_artista[] = $cantor["id"];
            }

            $novaMusica = new Musica([
                "nome" => $item["name"], 
                "artista" => implode(", ", $nome_artista), 
                "album" => $item["album"]["name"], 
                "capa_album_p" => $item["album"]["images"][2]["url"],
                "capa_album_m" => $item["album"]["images"][1]["url"],
                "id_artista" => implode(", ", $id_artista)
            ]);

            $this->lista[] = $novaMusica;
            $nome_artista = [];
            $id_artista = [];
        }
        
    }

    public function addFav(SessionManager $session, $id)
    {
        $dados = Spotify::artist($id)->get();
        $this->favoritos[] = $dados;
        $session->put("favoritos", $this->favoritos);
        
    }
}
