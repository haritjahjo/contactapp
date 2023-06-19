<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessCategory extends Model
{
    use HasFactory, SoftDeletes;

    public function business()
    {
        return $this->belongsToMany(Business::class, 'category_has_business');
    }
}
