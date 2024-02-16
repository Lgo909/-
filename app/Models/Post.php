<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "preview",
        "thumbnail"
    ];

    public static function findOrFail($id)
    {
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
       return $this->hasMany(Comment::class)->orderBy("created_at");
    }
}
