<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    CONST ALERT_MOMENT     = 0;
    CONST ALERT_5_MINUTES  = 1;
    CONST ALERT_10_MINUTES = 2;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'start_date', 'end_date', 'alert'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
