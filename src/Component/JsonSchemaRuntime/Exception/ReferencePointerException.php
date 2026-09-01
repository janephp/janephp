<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a JSON Pointer cannot be built from a reference document or
 * cannot address the fragment of the referenced document.
 *
 * Extends ReferenceResolveException (itself a \RuntimeException), so the
 * Jane error taxonomy and existing \RuntimeException catch blocks both keep
 * working. The previous exception carries the underlying Rs\Json\Pointer
 * failure.
 */
class ReferencePointerException extends ReferenceResolveException
{
}
