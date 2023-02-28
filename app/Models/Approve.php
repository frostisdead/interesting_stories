<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    protected $table = 'approve';
    protected $fillable = ['id', 'title', 'author_name', 'story', 'created_at', 'updated_at', 'tags'];
    // use HasFactory;
    public function user() {
        return $this->hasOne(User::class);
        }
}