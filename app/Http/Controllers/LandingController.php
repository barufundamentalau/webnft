<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing-page.index');
    }

    public function news()
    {
        return view('pages.landing-page.news');
    }

    public function projects()
    {
        return view('pages.landing-page.projects');
    }

    public function about()
    {
        return view('pages.landing-page.about');
    }
}
