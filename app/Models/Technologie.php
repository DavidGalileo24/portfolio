<?php

namespace App\Models;

use App\Enums\TechTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'percentaje', 'type'];

    protected $cast = [
        'type' => TechTypeEnum::class,
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
