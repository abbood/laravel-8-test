<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kra8\Snowflake\HasSnowflakePrimary;
use Kra8\Snowflake\Snowflake;

class BaseModel extends Model
{
    use HasSnowflakePrimary;

    public $incrementing = false;
    protected $keyType = 'string';
}

