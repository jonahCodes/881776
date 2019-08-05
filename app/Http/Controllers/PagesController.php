<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'laravel';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'about us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array('title' => 'services','services'=>['web dev','php webstack dev','UI and nodejs devs'] );
        return view('pages.services')->with($data);
    } 
}
