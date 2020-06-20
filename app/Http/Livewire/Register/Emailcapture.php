<?php

namespace App\Http\Livewire\Register;

use App\models\Contact;
use Livewire\Component;

class Emailcapture extends Component
{
    public $email='';
    public $data;

    public function render()
    {
        return view('livewire.register.emailcapture');
    }
    public function register()
    {
        $data = $this->validate([
            'email' => 'required|email|unique:contacts',
        ]);
        
        Contact::create([
            'email' => $data['email'],
        ]);
        return redirect('/');
    }
}
