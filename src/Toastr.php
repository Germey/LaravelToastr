<?php namespace Germey\Toastr;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}