<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'technology_id',
        'socialmedia_id',
        'company_id',
        'service_id',
    ];

    public function technology()
    {
        return $this->belongsTo(Technologie::class);
    }

    public function socialmedia()
    {
        return $this->belongsTo(Socialmedia::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
