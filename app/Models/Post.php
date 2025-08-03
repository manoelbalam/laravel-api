<?php

namespace App\Models;
use App\Models\User;

// Allow mass assignment for these fields
protected $fillable = ['user_id', 'title', 'body'];
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
