<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'services';

    protected $fillable = ['id', 'name',  'link', 'description', 'image', 'created_at', 'updated_at', 'region_id'];

    protected $hidden = ['created_at', 'updated_at'];
}
