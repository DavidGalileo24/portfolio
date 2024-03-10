<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'linkeable_id', 'linkeable_model'];

    public function linkeable()
    {
        return $this->morphTo();
    }
}
