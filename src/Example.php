<?php

/**
 * This file is part of wickedbyte/hello-world
 *
 * @copyright Copyright (c) Andy Snell <andy@wickedbyte.com>
 * @license https://opensource.org/license/mit/ MIT License
 */

declare(strict_types=1);

namespace WickedByte\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
