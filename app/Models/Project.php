<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function link()
    {
        return $this->morphOne(Link::class, 'linkeable');
    }
}
