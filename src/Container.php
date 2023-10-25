<?php

declare(strict_types=1);

namespace ExpertFramework\Container;

use ExpertFramework\Container\Contract\ContainerInterface;

/**
 * interface Container.
 *
 * @author jonas-elias
 */
class Container implements ContainerInterface
{
    /**
     * @var array
     */
    public static array $instances = [];

    /**
     * Method to get container.
     *
     * @return object
     */
    public static function get(string $className): object
    {
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new $className(new self());
        }

        return self::$instances[$className];
    }
}
