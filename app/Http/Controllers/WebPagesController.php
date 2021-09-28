<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function index(){
        return view('web_pages.landing');
    }

    public function login(){
        return view('web_pages.login');
    }

    public function register(){
        return view('web_pages.register');
    }

    public function blogs(){
        return view('web_pages.blogs');
    }

    public function contact(){
        return view('web_pages.contact');
    }

    public function logout(){
        return 'LOGOUT';
    }
}
