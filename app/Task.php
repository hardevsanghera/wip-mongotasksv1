<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}

