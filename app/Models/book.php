<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['book_name', 'author', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
