<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['id', 'comment', 'service_id', 'user_id', 'created_at', 'updated_at', 'user_name'];




    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id', 'id');
    }
}
