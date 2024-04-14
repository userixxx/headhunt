<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'name',
        'city_id',
        'cooperation_type',
        'work_schedule',
        'description',
        'salary_min',
        'salary_max',
        'experience',
        'required_skills',
        'isMove',
        'from',
        'languages',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
