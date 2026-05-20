<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("section.index");
    }


    public function about(){
        return view("section.about");
    }


    public function contact(){
        return view("section.contact");
    }


    public function terms(){
        return view("section.terms");
    }

    public function privacy(){
        return view("section.privacy");
    }

}
