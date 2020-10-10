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
        $this->middleware('auth',['except' => ['welcome','thebook']]);
    }

    /**,
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.userhome');
    }
    
    public function admin()
    {
        return view('pages.admindash');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }
    public function thebook()
    {
        return view('pages.thebook');
    }
}
