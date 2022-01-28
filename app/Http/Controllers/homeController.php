<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){

        $comics = Comic::All();

        return view('pages.home', compact('comics'));
    }

    public function show($id){

        $comic = Comic::findOrFail($id);
        // dd($id);
        return view('pages.show', compact('comic'));
    }
}
