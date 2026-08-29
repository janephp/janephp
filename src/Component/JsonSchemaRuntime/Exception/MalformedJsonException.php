<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown by generated clients when a response body advertised as JSON cannot
 * be decoded (ADR 0002 user-facing error taxonomy).
 *
 * Extends RuntimeException so consumers catching \RuntimeException keep
 * working; the previous JsonException carries the decoding failure details.
 */
class MalformedJsonException extends \RuntimeException implements JaneExceptionInterface
{
}
