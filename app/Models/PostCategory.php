<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    public $fillable = ["title","slug"];

    public function posts()
    {
        return $this->hasMany(Post::class,'id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
