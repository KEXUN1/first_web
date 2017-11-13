<?php

namespace App\Http\Controllers;

use App\Http\Model\Test;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function queue()
    {
        dispatch(new SendEmail('1193747537@qq.com'));
    }
    public function error()
    {
//        $name = 'sean';
//        dd($name);
//        Log::info('这是一个info级别的日志');
//        Log::warning('这是一个warning级别的日志');
        Log::error('这是一个error级别的日志', ['name'=>'sss','age'=>12] );
    }
    public function cache1()
    {
        //put
//        Cache::put('key1' , 'val1' ,10);
        //add
//        $bool = Cache::add('key2' ,'val2' ,10);
//        dd($bool);
        //forever
//        Cache::forever('key3' ,'val3');
        //has
        if (Cache::has('key1')){
            $var = Cache::get('key1');
            dd($var);
        } else {
            echo 'no';
        }
    }
    public function cache2()
    {
//        $var = Cache::get('key3');
//        $var = Cache::pull('key3');
        $var = Cache::forget('key2');
        dd($var);
    }
    public function mail()
    {
        Mail::raw('邮件内容', function ($message) {
            $message->from('13521776519@163.com','沐风');
            $message->subject('邮件主题 测试');
            $message->to('1193747537@qq.com');
        });
    }
    public function Test()
    {
        $data['name'] = 'xiaodong';
        Test::create($data);
    }
}
