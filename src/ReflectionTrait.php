<?php

namespace WyriHaximus\PHPUnit\Helpers;

/**
 * Class ReflectionTrait
 * @package WyriHaximus\PHPUnit\Helpers
 */
trait ReflectionTrait {
    /**
     * @param string $class
     * @param string $name
     * @return \ReflectionMethod
     */
    protected static function getMethod($class, $name) {
        $class = new \ReflectionClass($class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }

}
