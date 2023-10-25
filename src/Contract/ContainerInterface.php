<?php

namespace ExpertFramework\Container\Contract;

/**
 * interface ContainerContract.
 *
 * @author jonas-elias
 */
interface ContainerInterface
{
    /**
     * Method to get container.
     *
     * @return object
     */
    public static function get(string $class): object;
}
