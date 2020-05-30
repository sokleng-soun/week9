<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function team()
    {
        return view('team');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function portfolio_details()
    {
        return view('portfolio_details');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_single()
    {
        return view('blog_single');
    }
    public function contact()
    {
        return view('contact');
    }

}
