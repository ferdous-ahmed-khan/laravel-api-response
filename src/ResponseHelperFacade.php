<?php

namespace FerdousAhmedKhan\LaravelApiResponse;

use Illuminate\Support\Facades\Facade;

class ResponseHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'response-helper';
    }
}
