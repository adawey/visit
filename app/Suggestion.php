<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table = 'suggestions';

    protected $fillable = ['id', 'suggest', 'user_id', 'user_name', 'created_at', 'updated_at'];
}
