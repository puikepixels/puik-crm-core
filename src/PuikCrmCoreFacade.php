<?php

namespace Puikepixels\PuikCrmCore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Puikepixels\PuikCrmCore\Skeleton\SkeletonClass
 */
class PuikCrmCoreFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'puik-crm-core';
    }
}
