<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    /**
     * Get all of the locations for the user.
     */
    public function locations(): MorphToMany
    {
        return $this->morphToMany(Location::class, 'locationable');
    }
}
