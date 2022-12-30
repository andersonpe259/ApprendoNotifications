<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;

class apprendoController extends Controller
{
    public function index (){

        $content = content::all();
        return view('home.index', ['content' => $content,]);
    }
    public function about (){
        return view('home.about');
    }
}
