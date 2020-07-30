<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spotify;

class SistemaController extends Controller
{
    public function index()
    {
        return view("welcome", []);
    }

    public function search(Request $request)
    {
        $aux = Spotify::searchTracks('TNT')->get();
        return $aux;
    }
}
