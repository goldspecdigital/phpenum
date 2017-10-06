<?php

namespace GoldSpecDigital\PHPEnum;

use ReflectionClass;

abstract class Enum
{
    /**
     * Prevent any enum class from being instantiated.
     */
    protected final function __construct()
    {
        //
    }

    /**
     * Get all the constants as an array.
     *
     * @return array
     */
    public static final function all(): array
    {
        $reflectionClass = new ReflectionClass(static::class);
        $constants = $reflectionClass->getConstants();

        return $constants;
    }

    /**
     * Check if the enum contains the given key.
     *
     * @param string $key
     * @return bool
     */
    public static final function has(string $key): bool
    {
        return array_key_exists($key, static::all());
    }

    /**
     * Check if the enum contains the given value.
     *
     * @param string $value
     * @return bool
     */
    public static final function contains(string $value): bool
    {
        return in_array($value, static::all());
    }
}
