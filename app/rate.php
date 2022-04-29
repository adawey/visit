<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{

    protected $table = 'rates';
    protected $fillable = ['id', 'user_id', 'service_id', 'rate'];

}
