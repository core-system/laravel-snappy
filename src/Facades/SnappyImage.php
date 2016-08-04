<?php
namespace CoreSystem\Snappy\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * Class SnappyImage
 * @package CoreSystem\Snappy\Facades
 */
class SnappyImage extends BaseFacade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'snappy.image.wrapper'; }


}
