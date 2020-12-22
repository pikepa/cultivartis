<?php

use Illuminate\Support\Str;
use App\Http\Livewire\GuestMessages;
use function Pest\Livewire\livewire;


test('Email is required', function () {
    livewire(GuestMessages::class)
        ->set('email', '')
        ->call('sendmessage')
        ->assertHasErrors(['email' => 'required']);
});

test('Email must be an email', function () {
    livewire(GuestMessages::class)
        ->set('email', 'sdf')
        ->call('sendmessage')
        ->assertHasErrors(['email' => 'email']);
});

test('First_name is required', function () {
    livewire(GuestMessages::class)
        ->set('first_name', '')
        ->call('sendmessage')
        ->assertHasErrors(['first_name' => 'required']);
});

test('First_name is min 3 chars', function () {
    livewire(GuestMessages::class)
        ->set('first_name', '2')
        ->call('sendmessage')
        ->assertHasErrors(['first_name' => 'min']);
});

test('First_name is max 50 chars', function () {
    livewire(GuestMessages::class)
        ->set('first_name', Str::random(51))
        ->call('sendmessage')
        ->assertHasErrors(['first_name' => 'max']);
});

test('family_name is required', function () {
    livewire(GuestMessages::class)
        ->set('family_name', '')
        ->call('sendmessage')
        ->assertHasErrors(['family_name' => 'required']);
});

test('family_name is min 3 chars', function () {
    livewire(GuestMessages::class)
        ->set('family_name', '3')
        ->call('sendmessage')
        ->assertHasErrors(['family_name' => 'min']);
});

test('family_name is max 50 chars', function () {
    livewire(GuestMessages::class)
        ->set('family_name', Str::random(51))
        ->call('sendmessage')
        ->assertHasErrors(['family_name' => 'max']);
});

test('subject is required', function () {
    livewire(GuestMessages::class)
        ->set('subject', '')
        ->call('sendmessage')
        ->assertHasErrors(['subject' => 'required']);
});

test('subject is min 3 chars', function () {
    livewire(GuestMessages::class)
        ->set('subject', '3')
        ->call('sendmessage')
        ->assertHasErrors(['subject' => 'min']);
});

test('subject is max 50 chars', function () {
    livewire(GuestMessages::class)
        ->set('subject', Str::random(256))
        ->call('sendmessage')
        ->assertHasErrors(['subject' => 'max']);
});

test('message_body is required', function () {
    livewire(GuestMessages::class)
        ->set('message_body', '')
        ->call('sendmessage')
        ->assertHasErrors(['message_body' => 'required']);
});

test('message_body is min 3 chars', function () {
    livewire(GuestMessages::class)
        ->set('message_body', '3')
        ->call('sendmessage')
        ->assertHasErrors(['message_body' => 'min']);
});
