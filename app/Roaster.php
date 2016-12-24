<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;

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
        'country'
    ];

    protected $dates = ["established_year"];

    /**
     * Set established_year as Carbon object
     *
     * @param $date
     */
    public function setEstablishedYearAttribute($date)
    {
        $this->attributes['established_year'] = Carbon::createFromDate($date, 1, 1);
    }

    use FormAccessible;
    /**
     * Form model accessor for edit form
     *
     * @param Date value
     * @return Return date with format Y
     */
    public function formEstablishedYearAttribute($value)
    {
        return Carbon::parse($value)->format('Y');
    }

}
