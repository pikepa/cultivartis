<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Livewire\Livewire;
use App\models\Contact;
use Illuminate\Support\Str;
use App\Jobs\ProcessContactRequest;
use Illuminate\Support\Facades\Queue;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailRegistrationTest extends TestCase
{
    use RefreshDatabase;
    //this is a repeatable set up for these tests
    public function registerSetup()
    {
        Livewire::test('register.emailcapture')
        ->set('firstname', 'Fredo')
        ->set('familyname', 'Stormy')
        ->set('companyname', 'Acme & Co')
        ->set('email', 'pikepeter@gmail.com')
        ->set('check', 'erlang')
        ->call('register')
        ->assertRedirect('/thanks');
    }

    /** @test */
    public function can_register_email_address()
    {
        $this->registerSetup();
        $this->assertDatabaseHas('contacts',['email' => 'pikepeter@gmail.com']);    
    }

    /** @test */
    public function a_job_was_streamed_to_process_contact()
    {
        Queue::fake();

        $this->registerSetup();

        //    Queue::assertPushedOn( 'default' , ProcessContactRequest::class);
        $this->markTestSkipped('test to despatch job needed.');
    
    }

    /** @test */
    public function can_confirm_email_address_with_token()
    {
        $this->registerSetup();
        $this->assertDatabaseHas('contacts', ['id' => 1]);
        $contact = Contact::first();

        $this->assertNull($contact->email_verified_at);

        $this->get('/confirm/'.$contact->token)
        ->assertSee('Thank you for confirming your registration');

        $contact->refresh();
        $this->assertNotNull($contact->email_verified_at);

    }
    /** @test */
    public function can_not_reconfirm_email_address_with_token()
    {
        $this->registerSetup();
        $contact = Contact::first();
        $contact->email_verified_at = Carbon::now();
        $contact->save();


        $this->get('/confirm/'.$contact->token)
        ->assertSee('The new book by CultivartiS will be released soon');
    }




}
