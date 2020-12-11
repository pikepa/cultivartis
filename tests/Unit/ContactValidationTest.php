<?php

use App\Models\Contact;
use Illuminate\Support\Str;
use function Pest\Livewire\livewire;
use App\Http\Livewire\Register\Emailcapture;

test('Email is required', function () {
    
    livewire(Emailcapture::class)
        ->set('email', '')
        ->call('register')
        ->assertHasErrors(['email' => 'required']);
});

test('Email must be an email address', function () {
    
    livewire(Emailcapture::class)
        ->set('email', 'calebportio@')
        ->call('register')
        ->assertHasErrors(['email' => 'email']);
});

test('Email must be unique', function () {

    Contact::create([
        'firstname' => 'Fredo',
        'familyname' => 'Starr',
        'companyname' => 'Acme & Co',
        'email' => 'calebporzio@gmail.com',
    ]);
    
    livewire(Emailcapture::class)
        ->set('email', 'calebporzio@gmail.com')
        ->call('register')
        ->assertHasErrors(['email' => 'unique']);
});

test('First Name is required', function () {

    livewire(Emailcapture::class)
        ->set('firstname', '')
        ->call('register')
        ->assertHasErrors(['firstname' => 'required']);
});

test('First Name is min 5 chars', function () {

    livewire(Emailcapture::class)
        ->set('firstname', 'abc')
        ->call('register')
        ->assertHasErrors(['firstname' => 'min']);
});

test('First Name is max 50 chars', function () {

    livewire(Emailcapture::class)
        ->set('firstname', Str::random(51))
        ->call('register')
        ->assertHasErrors(['firstname' => 'max']);
});

test('Family Name is required', function () {

    livewire(Emailcapture::class)
        ->set('familyname', '')
        ->call('register')
        ->assertHasErrors(['familyname' => 'required']);
});

test('Family Name is min 5 chars', function () {

    livewire(Emailcapture::class)
        ->set('familyname', 'abc')
        ->call('register')
        ->assertHasErrors(['familyname' => 'min']);
});

test('Family Name is max 50 chars', function () {

    livewire(Emailcapture::class)
        ->set('familyname', Str::random(51))
        ->call('register')
        ->assertHasErrors(['familyname' => 'max']);
});


test('Company Name is min 5 chars', function () {

    livewire(Emailcapture::class)
        ->set('companyname', 'abc')
        ->call('register')
        ->assertHasErrors(['companyname' => 'min']);
});

test('Company Name is max 50 chars', function () {

    livewire(Emailcapture::class)
        ->set('companyname', Str::random(51))
        ->call('register')
        ->assertHasErrors(['companyname' => 'max']);
});