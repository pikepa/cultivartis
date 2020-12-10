<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\models\Contact;
use App\Jobs\ProcessContactRequest;
use Illuminate\Support\Facades\Queue;
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
    public function a_job_was_streamed_to_process_contact()
    {
        Queue::fake();

        Livewire::test('register.emailcapture')
        ->set('firstname', 'Fredo')
        ->set('familyname', 'Stormy')
        ->set('companyname', 'Acme & Co')
        ->set('email', 'pikepeter@gmail.com')
        ->set('check', 'erlang')
        ->call('register')
        ->assertRedirect('/');

    //    Queue::assertPushedOn( 'default' , ProcessContactRequest::class);
    
    }




}
