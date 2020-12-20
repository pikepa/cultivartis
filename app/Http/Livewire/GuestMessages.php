<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class GuestMessages extends Component
{
    public $first_name;
    public $family_name;
    public $email;
    public $subject;
    public $message;


    protected $rules = [
        'first_name' => 'required|min:3',
        'family_name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:5',
    ];
    
    public function render()
    {
        
        return view('livewire.guest-messages');
    }

    public function sendmessage()
    {
        $data = $this->validate($this->rules);
            
        $message = Message::create([
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'family_name' => $data['family_name'],
            'subject' => $data['subject'],
            'message' => $data['message'],
            'type' => 'message',
        ]);

        return redirect('/message/thanks');
    }

}
