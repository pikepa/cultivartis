<?php

test('anyone can load home page', function () {
    $this->get('/')->assertStatus(200)
    ->assertSeeLivewire('register.emailcapture');
});

test('anyone can load the book page', function () {
    $this->get('/thebook')->assertStatus(200)
    ->assertSee('The Erlang Enigma - Why?');
});

test('register returns guest to thanks for registering page', function () {
    $this->get('/thanks')->assertStatus(200)
    ->assertSee('Thank you for registering');
});

test('Any one can load the Contact Us page', function () {
    $this->get(route('guestmessage'))->assertStatus(200)
    ->assertSee('Create your message.');
});
