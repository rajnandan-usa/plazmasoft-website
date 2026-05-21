<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view("section.service.index");
    }

    public function mobile_app_development(){
        return view("section.service.mobile-app.index");
    }

    public function web_app(){
        return view("section.service.web-development");
    }

    public function ai_integration(){
        return view("section.service.ai-integration");
    }

    public function ui_ux(){
        return view("section.service.ui-ux-development");
    }

    public function mvp(){
        return view("section.service.mvp-development");
    }
}
