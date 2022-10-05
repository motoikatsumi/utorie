<?php

namespace App\Jobs;

use App\Mail\SendMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $to;
    private $data;

    /**
     * Create a new job instance.
     *
     * @param $to
     * @param string $data
     */
    public function __construct($to, $data = "")
    {
        $this->to = $to;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->data !== "")
            Mail::to($this->to)->send(new SendMailable($this->data));
        else
            Mail::to($this->to)->send(new SendMailable());
    }
}
