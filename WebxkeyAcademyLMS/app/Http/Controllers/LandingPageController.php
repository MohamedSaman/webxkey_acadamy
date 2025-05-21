<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function Home(){
        return view('LandingPage.home');
    }
}
