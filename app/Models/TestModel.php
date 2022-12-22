<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;

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
