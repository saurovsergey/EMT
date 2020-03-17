<?php

namespace saurovsergey\EMT\Facades;

use Illuminate\Support\Facades\Facade;

class EMT extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'emt';
    }
}
