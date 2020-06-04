<?php

namespace UiBuilder\Page;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Page\Skeleton\SkeletonClass
 */
class PageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'page';
    }
}
