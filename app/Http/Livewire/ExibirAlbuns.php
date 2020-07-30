<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spotify;

class ExibirAlbuns extends Component
{

    public $albuns;
    public $id_artista;

    public function mount($id_artista)
    {
        $this->artista = Spotify::artist($id_artista)->get();
        $this->albuns = Spotify::artistAlbums($id_artista)->get();
        //dd($this->albuns);
    }

    public function render()
    {
        return view('livewire.exibir-albuns', [
            "albuns" => $this->albuns,
            "artista" => $this->artista
        ]);
    }
}
