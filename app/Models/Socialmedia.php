<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function link()
    {
        return $this->morphOne(Link::class, 'linkeable');
    }

    public function aboutme()
    {
        return $this->hasMany(Aboutme::class);
    }
}
