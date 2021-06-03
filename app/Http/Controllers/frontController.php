<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function posts(){
        return view('frontend.posts');
    }

    public function category(){
        return view('frontend.lifestyle');
    }
}
