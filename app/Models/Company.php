<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function project(){
        return $this->hasOne(Project::class);
    }

    public function aboutme()
    {
        return $this->hasMany(Aboutme::class);
    }
}
