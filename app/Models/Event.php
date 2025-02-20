<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'date'];

    protected $casts = [
        'date' => 'datetime'
    ];    

    public function rsvps(): HasMany
    {
        return $this->hasMany(EventRsvp::class);
    }

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'event_rsvps')
            ->using(EventRsvp::class)
            ->withTimestamps()
            ->withPivot('deleted_at')
            ->wherePivotNull('deleted_at');
    }

}
