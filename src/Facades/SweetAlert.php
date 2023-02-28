<?php

namespace DridiHaythem\LaravelSweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

class SweetAlert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SweetAlert';
    }
}
