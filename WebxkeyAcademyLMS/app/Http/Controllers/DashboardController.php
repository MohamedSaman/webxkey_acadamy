<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function Dashboard(){
        return view('Dashboard.index');
    }

    // public function edit(){
    //     return view('home.edit-profile');
    // }

    // public function profile(){
    //     return view('home.profile');
    // }

    // public function page1(){
    //     return view('home.page1');
    // }

    // public function sign(){
    //     return view('home.sign-in-up');
    // }
}
