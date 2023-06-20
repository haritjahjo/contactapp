<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ['business'];
    protected $fillable = [
        'business_id',
        'firstname',
        'lastname',
        'email',
        'phone',        
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class)->withTrashed();
    }

    public function tasks()
    {
        return $this->morphMany(Task::class, 'taskable');
    }
}
