<?php

namespace Jane\Component\AutoMapper\Generator;

/**
 * Allows to get a unique variable name for a scope (like a method).
 *
 * @internal
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class UniqueVariableScope
{
    private $registry = [];

    /**
     * Return an unique name for a variable name.
     */
    public function getUniqueName(string $name): string
    {
        $name = strtolower($name);

        if (!isset($this->registry[$name])) {
            $this->registry[$name] = 0;

            return $name;
        }

        ++$this->registry[$name];

        return "{$name}_{$this->registry[$name]}";
    }
}
