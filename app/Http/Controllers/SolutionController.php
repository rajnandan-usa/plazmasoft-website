<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function fintech(){
        return view("section.solution.fintech");
    }

    public function fleet_management(){
        return view("section.solution.fleet-management");
    }

    public function ai_property_visualization(){
        return view("section.solution.ai-property-visualization");
    }

    public function agritech_development(){
        return view("section.solution.agritech-development");
    }
}
