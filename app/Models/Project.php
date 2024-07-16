<?php

namespace App\Models;

use App\Enums\ProjectTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'description'];

    protected $cast = [
        'type' => ProjectTypeEnum::class,
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function link()
    {
        return $this->morphOne(Link::class, 'linkeable');
    }
}
