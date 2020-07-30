<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    public $fillable = [
        "nome", "artista", "album", "capa_album_p",
        "capa_album_m", "id_artista"
    ];
}
