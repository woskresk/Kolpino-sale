<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class LarademoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larademo';
    }
}