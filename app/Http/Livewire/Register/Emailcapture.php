<?php

namespace App\Http\Livewire\Register;

use App\Jobs\ProcessContactRequest;
use App\Models\Contact;
use Illuminate\Support\Str;
use Livewire\Component;

class Emailcapture extends Component
{
    public $email = '';
    public $firstname = '';
    public $familyname = '';
    public $companyname = '';
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
            'firstname' => 'required|min:5|max:50',
            'familyname' => 'required|min:5|max:50',
            'companyname' => 'sometimes|min:5|max:50',
            'check' => 'required|in:Erlang,erlang,ERLANG',
        ]);

        do {
            $token = Str::random(16);
        } while (Contact::where('token', $token)->first());

        $contact = Contact::create([
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'familyname' => $data['familyname'],
            'companyname' => $data['companyname'],
            'token' => $token,
        ]);

        // $contact = Contact::first();

        //despatch confirmation request
        ProcessContactRequest::dispatch($contact)->onQueue('emails');

        return redirect('/thanks');
    }
}
