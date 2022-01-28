<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('pages.home');
    }
}
