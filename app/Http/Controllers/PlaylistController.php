<?php

namespace App\Http\Controllers;

use App\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index(){
        return 'The angels must observe you';
        return Playlist::all();
    }
}
