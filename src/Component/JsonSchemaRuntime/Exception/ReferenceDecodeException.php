<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a successfully fetched reference document cannot be decoded:
 * its content is neither valid JSON nor valid YAML, or the parsed content
 * cannot be re-encoded back to JSON.
 *
 * Extends ReferenceResolveException (itself a \RuntimeException), so the
 * Jane error taxonomy and existing \RuntimeException catch blocks both keep
 * working.
 */
class ReferenceDecodeException extends ReferenceResolveException
{
}