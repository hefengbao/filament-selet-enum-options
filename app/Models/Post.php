<?php

namespace App\Models;

use App\Constant\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'status', 'published_at'];

    protected $casts = [
        'status' => Status::class,
        'published_at' => 'datetime'
    ];
}
