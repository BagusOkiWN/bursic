<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }    
    public function about(){
        return view('pages.about');
    }
    public function blogdetails(){
        return view('pages.blog-details');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function carsdetails(){
        return view('pages.car-details');
    }
    public function cars(){
        return view('pages.cars');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function team(){
        return view('pages.team');
    }
    public function terms(){
        return view('pages.terms');
    }
    public function testimonials(){
        return view('pages.testimonials');
    }
    public function auth(){
        return view('auth.auth');
    }
}
