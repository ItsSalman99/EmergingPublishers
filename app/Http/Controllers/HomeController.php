<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function printingPress()
    {
        return view('frontend.printing-press');
    }

    public function termsconditions()
    {
        return view('frontend.terms-conditions');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }


}
