<?php

namespace App\Jobs;

use App\Mail\MessagedReceived;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

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
