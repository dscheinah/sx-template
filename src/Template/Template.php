<?php

namespace Sx\Template\Template;

class Template
{
    /**
     * @var array<mixed>
     */
    private static array $instances = [];

    /**
     * Retrieve a template helper from the storage. Always use the common interface as the class name.
     *
     * This is used in the templates itself to start rendering different content types.
     *
     * @template T
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public static function get(string $class)
    {
        assert(isset(self::$instances[$class]) && self::$instances[$class] instanceof $class);
        return self::$instances[$class];
    }

    /**
     * Set the implementation to be retrieved by set. Use the common interface as the class name.
     *
     * The used instance will vary between website (emitter) and CMS (collector) implementation.
     *
     * @template T
     *
     * @param class-string<T> $class
     * @param T $instance
     */
    public static function set(string $class, $instance): void
    {
        self::$instances[$class] = $instance;
    }
}
