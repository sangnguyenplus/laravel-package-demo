<?php

namespace Botble\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    /**
     * @var string
     */
    protected $table = 'demo';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}