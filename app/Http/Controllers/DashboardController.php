<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //ecommerce
    public function welcomeIndexPage(){
        // return view('pages.dashboard-ecommerce');
        return view("welcome") ;
    }
    // analystic
    public function dashboardAnalytics(){
        return view('pages.dashboard-analytics');
    }
}
