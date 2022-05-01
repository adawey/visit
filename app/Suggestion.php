<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table = 'suggestions';

    protected $fillable = ['id', 'suggest', 'user_id', 'created_at', 'updated_at'];
}
