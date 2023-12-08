<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'locationable');
    }

    public function cars(): MorphToMany
    {
        return $this->morphedByMany(Car::class, 'locationable');
    }

    public function brands(): MorphToMany
    {
        return $this->morphedByMany(Brand::class, 'locationable');
    }

}
