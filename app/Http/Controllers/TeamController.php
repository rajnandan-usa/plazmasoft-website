<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        return view("section.team.index");
    }


    public function flutter_developer(){
        return view("section.team.flutter-developer");
    }

    public function reactjs_developer(){
        return view("section.team.reactjs-developer");
    }

    public function fullstack_developer(){
        return view("section.team.fullstack-developer");
    }

    public function mernstack_developer(){
        return view("section.team.mernstack-developer");
    }

    public function reactnative_developer(){
        return view("section.team.reactnative-developer");
    }

    public function dedicated_developer(){
        return view("section.team.dedicated-developer");
    }
}
