<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client;

/**
 * Creates lazy ghost proxies of generated model classes.
 *
 * A ghost proxy is an object of the target class whose properties are
 * uninitialized until first access: reading any property (or calling any
 * reflection-driven consumer) runs the initializer, which performs the HTTP
 * request and parses the response through the endpoint's own per-status
 * model / exception mapping, then copies the parsed model's properties onto
 * the proxy. Outside of the initialization moment, the proxy is an actual
 * instance of the target class: instanceof, property reads, cloning and
 * serialization all behave like a regular model.
 *
 * Ghosting relies on PHP native lazy objects (PHP >= 8.3). On older PHP
 * versions, canCreate() returns false and deferred endpoints fall back to
 * the eager behavior (blocking request + parse at call time).
 */
final class GhostFactory
{
    public static function canCreate(): bool
    {
        return \PHP_VERSION_ID >= 80300;
    }

    /**
     * Create a lazy ghost proxy of $class.
     *
     * @param string   $class FQCN of the generated model to fake
     * @param \Closure $parse fn(): mixed — performs the request + parse and
     *                        returns an instance of $class when invoked
     *
     * @throws \LogicException when native lazy objects are not available
     */
    public static function create(string $class, \Closure $parse): object
    {
        if (!self::canCreate()) {
            throw new \LogicException(\sprintf('Lazy ghost proxies require PHP >= 8.3, running on %s: %s cannot be proxied.', \PHP_VERSION, $class));
        }

        $reflector = new \ReflectionClass($class);

        return $reflector->newLazyGhost(static function (object $ghost) use ($parse): void {
            $value = $parse();

            if (\is_object($value) && $value instanceof $ghost) {
                foreach (get_object_vars($value) as $name => $propertyValue) {
                    $ghost->$name = $propertyValue;
                }
            }
        });
    }

    /**
     * Force the initialization of a proxy now (used by the preload fetch mode
     * to register the HTTP request without parsing the response body yet).
     */
    public static function initialize(object $proxy): void
    {
        if (!self::canCreate()) {
            return;
        }

        (new \ReflectionClass($proxy::class))->initializeLazyObject($proxy);
    }
}
