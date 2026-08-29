<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a JSON reference document cannot be fetched or parsed
 * (unreadable source, or content that is neither valid JSON nor valid YAML).
 *
 * User-facing per the Jane error taxonomy (ADR 0002): during generation the
 * console renders these errors cleanly instead of burying them in a generic
 * generation failure.
 */
class ReferenceResolveException extends \RuntimeException implements JaneExceptionInterface
{
}
