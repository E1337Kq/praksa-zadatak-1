<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $guarded = [];

    public function path(){
        return route('subscribers.show',$this);
    }
}
