<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function carslist()
    {
        return view('carslist');
    }

    public function carsedit()
    {
        return view('carsedit');
    }

    public function delete()
    {
        return view('home');
    }
}
