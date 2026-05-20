<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view("section.service.index");
    }

    public function android(){
        return view("section.service.mobile-app.android-development");
    }

    public function ios(){
        return view("section.service.mobile-app.ios-development");
    }

    public function flutter(){
        return view("section.service.mobile-app.flutter-development");
    }

    public function react_native(){
        return view("section.service.mobile-app.react-native-development");
    }

    public function web_app(){
        return view("section.service.web-development");
    }

    public function ui_ux(){
        return view("section.service.ui-ux-development");
    }

    public function mvp(){
        return view("section.service.mvp-development");
    }

    public function app_maintenance(){
        return view("section.service.app-maintenance");
    }

    public function chatgpt(){
        return view("section.service.chatgpt-development");
    }

    public function iot(){
        return view("section.service.iot-development");
    }

    public function blockchain(){
        return view("section.service.blockchain-app-development");
    }

    public function ar_vr(){
        return view("section.service.ar-vr-development");
    }

}
