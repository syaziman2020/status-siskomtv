<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index()
    {
        // $items = TravelPackage::with('galleries')->get();
        return view('pages.app');
    }
}
