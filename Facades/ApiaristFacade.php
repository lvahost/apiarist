<?php

namespace thepirateorange\Apiarist\Facades;

use Illuminate\Support\Facades\Facade;

class ApiaristFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apiarist';
    }
}
