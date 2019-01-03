<?php

namespace Tristanward\LaravelWorkable\Models;

use Illuminate\Database\Eloquent\Model;

class WorkableVacancy extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'location' => 'array',
    ];
}
