<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        $this->middleware('auth', ['except' => 
        ['welcome', 'thebook', 'thanks', 'confirm','completed']]);
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

    public function thanks()
    {
        return view('pages.registering.registerthanks');
    }

    public function completed()
    {
        return view('pages.registering.registerconfirmed');
    }

    public function confirm($token)
    {

        $contact = Contact::where('token', $token)->first();

        if(is_null($contact)){
            return redirect()->action([HomeController::class, 'welcome']);
        }

        $contact->email_verified_at = now();
        $contact->token = null;
        $contact->save();

        return redirect()->action([HomeController::class, 'completed']);
    
    }
}
