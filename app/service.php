<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'services';

    protected $fillable = ['id', 'name',  'link', 'description', 'image', 'created_at', 'updated_at', 'region_id'];

    protected $hidden = ['created_at', 'updated_at'];



    public function region()
    {
        return $this->belongsTo(regions_lite::class, 'region_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'service_id');
    }
}
