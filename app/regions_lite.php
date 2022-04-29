<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regions_lite extends Model
{
    //
    protected $table = 'regions_lite';
    protected $fillable = ['id', 'code', 'name_ar'];
    protected $hidden = ['created_at', 'updated_at'];

}
