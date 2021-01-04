<?php

namespace Tests\Feature;

use App\Jobs\ProcessContactRequest;
use App\models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Livewire\Livewire;
use Tests\TestCase;

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
        $this->assertDatabaseHas('contacts', ['email' => 'pikepeter@gmail.com']);
    }

    /** @test */
    public function a_job_can_can_be_streamed_to_process_the_contact()
    {
        // Fake the queue
        Queue::fake();

        $contact = Contact::create([
            'firstname' => 'Fredo',
            'familyname' => 'Starr',
            'companyname' => 'Acme & Co',
            'email' => 'calebporzio@gmail.com',
        ]);
        // Push a job
        ProcessContactRequest::dispatch($contact)->onQueue('emails');

        // Assert the job was pushed to the queue
        Queue::assertPushed(ProcessContactRequest::class);
    }

    /** @test */
    public function can_confirm_email_address_with_token()
    {
        $this->registerSetup();
        $this->assertDatabaseHas('contacts', ['id' => 1]);
        $contact = Contact::first();

        $this->assertNull($contact->email_verified_at);

        $this->get('/confirm/'.$contact->token);

        $contact->refresh();
        $this->assertNotNull($contact->email_verified_at);
    }
}
