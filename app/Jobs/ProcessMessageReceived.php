<?php

namespace App\Jobs;

use App\Mail\MessagedReceived;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ProcessMessageReceived implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $guestmessage;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($guestmessagein)
    {
        $this->guestmessage = $guestmessagein;    
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->guestmessage['email'])
        ->send(new MessagedReceived($this->guestmessage));    
    }
}
