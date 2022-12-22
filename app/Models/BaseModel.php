<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (is_null($model->getKey())) {
                $id = rand(1, 999999999999999);
                $model->setAttribute($model->getKeyName(), $id);
            }
        });
    }
}

