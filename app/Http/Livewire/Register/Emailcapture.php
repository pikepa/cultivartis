<?php

namespace App\Http\Livewire\Register;

use App\models\Contact;
use Livewire\Component;

class Emailcapture extends Component
{
    public $email='';
    public $firstname='';
    public $familyname='';
    public $companyname='';
    public $data;
    public $check;

    public function render()
    {
        return view('livewire.register.emailcapture');
    }
    public function register()
    {
        $data = $this->validate([
            'email' => 'required|email|unique:contacts',
            'firstname' => 'required|min:5',
            'familyname' => 'required|min:5',
            'companyname' => 'sometimes|min:5',
            'check' => 'required|in:Erlang,erlang,ERLANG',
        ]);
        
        $contact = Contact::create([
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'familyname' => $data['familyname'],
            'companyname' => $data['companyname'],
        ]);
        
        return redirect('/');
    }
}
