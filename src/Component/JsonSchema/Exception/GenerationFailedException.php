<?php

namespace Jane\Component\JsonSchema\Exception;

/**
 * Safety net for unexpected errors raised during the generation phase.
 *
 * Raw PHP errors (TypeError, Error, ...) are wrapped so console and bundle
 * commands can render a clean message instead of a stack trace, while the
 * original error class and message stay visible for debugging.
 */
class GenerationFailedException extends \RuntimeException implements JaneExceptionInterface
{
    public function __construct(
        string $schemaOrigin,
        \Throwable $previous,
    ) {
        parent::__construct(\sprintf(
            'An unexpected error occurred while generating "%s": [%s] %s',
            $schemaOrigin,
            \get_class($previous),
            $previous->getMessage()
        ), 0, $previous);
    }
}
