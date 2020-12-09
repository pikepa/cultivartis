<?php

namespace Tests\Feature;

use App\models\Contact;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailRegistrationTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function can_get_to_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
        ->assertSee('Email');
    }

    /** @test */
    public function can_get_to_thebook_page()
    {
        $response = $this->get('/thebook');

        $response->assertStatus(200)
        ->assertSee('Why we decided to write');
    }

    /** @test */
    public function can_register_email_address()
    {
        Livewire::test('register.emailcapture')
        ->set('firstname', 'Fredo')
        ->set('familyname', 'Stormy')
        ->set('companyname', 'Acme & Co')
        ->set('email', 'pikepeter@gmail.com')
        ->set('check', 'erlang')
        ->call('register')
        ->assertRedirect('/');

        $this->assertDatabaseHas('contacts',['email' => 'pikepeter@gmail.com']);    
    }


    /** @test */
    public function email_is_required()
    {
        Livewire::test('register.emailcapture')
            ->set('email', '')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    function email_is_valid_email()
    {
        Livewire::test('register.emailcapture')
            ->set('email', 'calebporzio')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    function email_hasnt_been_taken_already()
    {
        Contact::create([
            'email' => 'calebporzio@gmail.com',
        ]);

        Livewire::test('register.emailcapture')
        ->set('email', 'calebporzio@gmail.com')
        ->call('register')
        ->assertHasErrors(['email' => 'unique']);
    }


}
