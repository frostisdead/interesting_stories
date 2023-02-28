<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';
    protected $fillable = ['id', 'author_name', 'title', 'story', 'created_at','updated_at', 'tags'];
    use HasFactory;
    public function user() {
    return $this->hasOne(User::class);
    }
}