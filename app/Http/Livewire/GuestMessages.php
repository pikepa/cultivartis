<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GuestMessages extends Component
{
    public $first_name;
    public $family_name;
    public $email;
    public $subject;
    public $message_body;
    public $type;
    public $subscribe=1;
    public $messages;


    //page manipulations
    public $showthanks = false;
    public $showform = true;
    public $showlist = false;


    protected $rules = [
        'first_name' => 'required|min:3',
        'family_name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message_body' => 'required|min:5',
        'type' => '',
    ];
    
    public function mount()
    {

        if (! Auth::user())
        {
            $this->resetToForm();
        }
        else{
            $this->resetToList();
        }
    }
    public function render()
    {

        $this->messages = Message::orderBy('created_at', 'desc')->get();

        return view('livewire.guest-messages');
    }

    public function sendmessage()
    {

        Message::create([
            'first_name' => $this->first_name,
            'family_name' => $this->family_name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message_body' => $this->message_body,
            'type' => 'message',
        ]);

        $this->resetToThanks();

        // return redirect(route('message.thanks'));
    }

    public function resetToThanks(){
        $this->showthanks = true;
        $this->showform = false;
        $this->showlist = false;
    }

    public function resetToForm(){
        $this->showthanks = false;
        $this->showform = true;
        $this->showlist = false;
    }

    public function resetToList(){
        $this->showthanks = false;
        $this->showform = false;
        $this->showlist = true;
    }

}
