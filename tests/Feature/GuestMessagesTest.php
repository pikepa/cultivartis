<?php

use Livewire\Livewire;
use App\Models\Message;

it('has guestmessages page', function () {
    $this->get('/messageus')->assertStatus(200)
    ->assertSeeLivewire('guest-messages');
});

it('can create a message', function(){
$this->withoutExceptionHandling();

    Livewire::test('guest-messages')
        ->set('first_name', 'Peter')
        ->set('family_name', 'Stormy')
        ->set('email', 'pikepeter@gmail.com')
        ->set('subject', 'This is a test subject')
        ->set('message', 'This is a test message')
    //    ->set('check', 'erlang')
        ->call('sendmessage')
        ->assertRedirect('/message/thanks');

        $this->assertDatabaseHas('messages', ['id' => 1]);

});
