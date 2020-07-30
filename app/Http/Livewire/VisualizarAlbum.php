<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spotify;

class VisualizarAlbum extends Component
{

    public $lista;
    public $album;

    public function mount($id_album)
    {
        $this->lista = Spotify::albumTracks($id_album)->get();
        $this->album = Spotify::album($id_album)->get();
    }

    public function render()
    {

        return view('livewire.visualizar-album', [
            "lista_de_musicas" => $this->lista["items"],
            "album" => $this->album
        ]);
    }
}
