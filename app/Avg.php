<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avg extends Model
{
    protected $table = 'rate';

    protected $fillable = ['service_id' , 'S_count', 'ratesum' , 'avg'];

    protected $hidden = ['created_at', 'updated_at'];

}
