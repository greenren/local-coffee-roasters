<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Roaster extends Model
{
    /**
     * Attributes that can be mass assigned
     */
    protected $fillable = [
        'name',
        'description',
        'established_year',
        'website_url',
        'store_url',
        'city',
        'state',
        'country',
        'logo'
    ];

    protected $dates = ["established_year"];

    /**
     * Set established_year as Carbon object
     *
     * @param $date
     * @return return type Carbon
     */
    public function setEstablishedYearAttribute($date)
    {
        $this->attributes['established_year'] = Carbon::createFromDate($date, 1, 1);
    }
}
