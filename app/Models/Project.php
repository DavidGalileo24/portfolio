<?php

namespace App\Models;

use App\Enums\ProjectTypeEnum;
use App\Enums\StatusProjectEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company_id', 'type', 'status', 'description'];

    protected $cast = [
        'type' => ProjectTypeEnum::class,
        'status' => StatusProjectEnum::class,
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function link()
    {
        return $this->morphOne(Link::class, 'linkeable');
    }
}
