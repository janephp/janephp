<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a JSON reference violates a resolution policy: disallowed
 * scheme, local path escaping the allowed roots, external references disabled,
 * or the reference host not being allowlisted.
 *
 * Extends ReferenceResolveException (itself a \RuntimeException), so the
 * Jane error taxonomy and existing \RuntimeException catch blocks both keep
 * working.
 */
class InvalidReferenceException extends ReferenceResolveException
{
}
