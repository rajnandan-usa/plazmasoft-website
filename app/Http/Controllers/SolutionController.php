<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function fintech(){
        return view("section.solution.fintech");
    }

    public function food_ordering(){
        return view("section.solution.food-ordering");
    }

    public function health_app(){
        return view("section.solution.healthcare-app");
    }

    public function qr_code_based_food(){
        return view("section.solution.qr-code-based-food-ordering");
    }

    public function on_demand_app(){
        return view("section.solution.on-demand-app");
    }

    public function fitness_app(){
        return view("section.solution.fitness-app");
    }

    public function fantasy_app(){
        return view("section.solution.fantasy-app");
    }

    public function transport_app(){
        return view("section.solution.transport-app");
    }


    public function texi_booking_app(){
        return view("section.solution.texi-booking-app");
    }


    public function dating_app(){
        return view("section.solution.dating-app");
    }


    public function grocary_app(){
        return view("section.solution.grocary-app");
    }

    public function socialmedia_app(){
        return view("section.solution.socialmedia-app");
    }

    public function sportbatting_app(){
        return view("section.solution.sportbatting-app");
    }

    public function stocktrading_app(){
        return view("section.solution.stocktrading-app");
    }

    public function videostreaming_app(){
        return view("section.solution.videostreaming-app");
    }

}
