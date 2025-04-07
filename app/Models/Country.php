<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable =[
        'country_name',
        'region_id'

    ];
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'country_id');
    }
}
