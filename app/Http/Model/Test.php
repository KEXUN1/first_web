<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'test';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
