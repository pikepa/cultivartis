<?php

use App\User;
use Livewire\Livewire;


it('has guestmessages page', function () {
    $this->get('/messageus')->assertStatus(200)
    ->assertSeeLivewire('guest-messages');
});

it('can create a message', function(){

    Livewire::test('guest-messages')
        ->set('first_name', 'Peter')
        ->set('family_name', 'Stormy')
        ->set('email', 'pikepeter@gmail.com')
        ->set('subject', 'This is a test subject')
        ->set('message_body', 'This is a test message')
    //    ->set('check', 'erlang')
        ->call('sendmessage')
        ->assertSee('Thank you for your message');

        $this->assertDatabaseHas('messages', ['id' => 1]);

});

it('shows a form when opened by an guest user', function(){

    Livewire::test('guest-messages')
        ->call('resetToForm')
        ->assertSee('Messaging System')
        ->assertSee('Create your message.');
});

it('shows a list when opened by an auth user', function(){

    Livewire::actingAs(User::factory()->make())
        ->test('guest-messages')
        ->call('resetToList')
        ->assertSee('Messaging System')
        ->assertSee('Date');
});
