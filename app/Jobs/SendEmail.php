<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        //
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
//        Mail::raw('队列测试', function ($message) {
//            $message->from('13521776519@163.com','沐风');
//            $message->subject('邮件主题 测试');
//            $message->to($this->email);
//            exit;
//        });
//        Log::info('已发送邮件' .$this->email);
    }
}