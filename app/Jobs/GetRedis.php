<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Redis;

class GetRedis implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $redis;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($redis)
    {
        $this->redis = $redis;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        file_put_contents('./output.log',var_export(1,true),FILE_APPEND);
    }
}
