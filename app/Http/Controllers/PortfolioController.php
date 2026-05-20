<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $data['projects'] = Project::latest()->paginate(25);
        return view("section.portfolio.index",$data);
    }

    public function show(){
        return view("section.portfolio.show");
    }
}
