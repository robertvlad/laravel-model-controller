<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        return view('layouts.app');
    }

    public function menu() {

        $menu = [
            'COMICS' => '/comics',
            'CHARACTERS' => '/characters',
            'MOVIES' => '/movies',
            'TV' => '/tv',
            'GAMES' => '/games',
            'COLLECTIBLES' => '/collectibles',
            'CHARACTERS' => '/characters',
            'VIDEOS' => '/videos',
            'FANS' => '/fans',
            'NEWS' => '/news',
            'SHOP' => '/shop',
        ];
        
        return view('comics', compact('menu'));
    }
}
