<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'small_description', 'categoryblog', 'article'];

    public function categoryblog()
    {
        return $this->belongsTo(Categoryblog::class);
    }
}
