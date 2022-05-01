<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    protected $table = 'complaints';

    protected $fillable = ['id', 'type', 'complaint', 'user_id', 'user_name', 'created_at', 'updated_at'];
}
