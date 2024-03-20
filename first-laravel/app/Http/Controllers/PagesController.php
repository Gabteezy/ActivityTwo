<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function home(){
        $this->index();
    }
    public function aboutus(){
        return view("about");
    }
    public function services(){
        return view("services");
    }
    public function contactus(){
        return view("contact");
    }



}