<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function products(){
        return view('pages.products');
    }

    public function careers(){
        return view('pages.careers');
    }




    public function contact(){
        return view('pages.contact');
    }


}
