<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public static function create($data)
    {
        if (empty($data['start_month']))
        {
            $data['start_month'] = null;
        }

        if (empty($data['end_month']))
        {
            $data['end_month'] = null;
        }

        $query = static::query();
        return $query->create($data);
    }
}
