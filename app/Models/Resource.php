<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'author', 'description', 'title', 'url'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
