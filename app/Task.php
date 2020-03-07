<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
    /**
     * @var string
     */
    protected $connection='mongodb';
    /**
     * @var array
     */
    protected $fillable=['title'];

    /**
     * @var string
     */
    protected $collection = 'tasks';

}
