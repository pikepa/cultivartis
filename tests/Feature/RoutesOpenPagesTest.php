<?php

test('anyone can load home page', function () {

    $this->get('/')->assertStatus(200)
    ->assertSeeLivewire('register.emailcapture');

});

test('anyone can load the book page', function () {
    $this->get('/thebook')->assertStatus(200)
    ->assertSee('Why we decided to write');
});

test('register returns guest to thanks for registering page', function () {
    $this->get('/thanks')->assertStatus(200)
    ->assertSee('Thank you for registering');
});


 