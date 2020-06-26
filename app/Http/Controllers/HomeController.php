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
        $this->middleware('auth',['except' => 'welcome']);
    }

    /**,
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('userhome');
    }
    
    public function admin()
    {
        return view('admindash');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
