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
    public $listing;


    //page manipulations
    public $showthanks = false;
    public $showform = true;
    public $showlist = false;


    protected $rules = [
        'first_name' => 'required|min:3|max:50',
        'family_name' => 'required|min:3|max:50',
        'email' => 'required|email',
        'subject' => 'required|min:5|max:255',
        'message_body' => 'required|min:5',
        'type' => '',
    ];
    
    public function mount()
    {
        if (Auth::check()) {
            $this->resetToList();
        
        } else {

            $this->resetToForm();
        }

    }
    public function render()
    {


        $this->listing = Message::orderBy('created_at', 'desc')->get();

        return view('livewire.guest-messages');
    }

    public function sendmessage()
    {
        $this->validate();

        Message::create([
            'first_name' => $this->first_name,
            'family_name' => $this->family_name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message_body' => $this->message_body,
            'type' => 'message',
        ]);

        $this->resetToThanks();

    }

    public function viewMessage($id){
        if($id){
            $message = Message::find($id);
        }
            $this->first_name = $message->first_name;
            $this->family_name = $message->family_name;
            $this->email = $message->email;
            $this->subject = $message->subject;
            $this->message_body = $message->message_body;

            $this->resetToForm();
    }

    public function deleteMessage($id){
        if($id){
            $message = Message::find($id);
        }
            $message->delete();

            $this->resetToList();
    }

    public function gohome(){
        return redirect('/');
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
     //   dd($this->readonly);

    }

    public function resetToList(){

            $this->showthanks = false;
            $this->showform = false;
            $this->showlist = true;   
        
    }

}
