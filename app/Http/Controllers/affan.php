<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class affan extends Controller
{
    public function home(){
        return view ('home');
    }

    public function about(){
        return view ('about');
    }

    public function service(){
        return view ('service');
    }

    public function menu(){
        return view ('menu');
    }

    public function book(){
        return view ('book');
    }

    public function team(){
        return view ('team');
    }

    public function test(){
        return view ('test');
    }


    public function contact(){
        return view ('contact');
    }
}
