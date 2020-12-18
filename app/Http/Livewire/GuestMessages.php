<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuestMessages extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    public $tenants;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];
    public function render()
    {
        
        return view('livewire.guest-messages');
    }
}
