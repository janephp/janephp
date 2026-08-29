<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a JSON reference document cannot be fetched or parsed
 * (unreadable source, or content that is neither valid JSON nor valid YAML).
 */
class ReferenceResolveException extends \RuntimeException
{
}
