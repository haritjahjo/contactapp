<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;
    //protected $with = ['business', 'person'];

    public function people(): MorphToMany
    {
        return $this->morphedByMany(Person::class, 'taggable');
    }

    public function businesses()
    {
        return $this->morphedByMany(Business::class, 'taggable');
    }
}
