<?php

namespace App\Http\Controllers;

use App\Http\Model\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test()
    {
        $data['name'] = 'xiaodong';
        Test::create($data);
    }
}
