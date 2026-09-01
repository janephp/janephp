<?php

namespace Jane\Component\JsonSchema\Exception;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

/**
 * Thrown when a schema uses features unsupported by the component handling it.
 *
 * Carries one human readable entry per violation, each pointing at the
 * offending location in the document so users can fix every problem in a
 * single pass instead of discovering them one crash at a time.
 */
class InvalidSchemaException extends \RuntimeException implements JaneExceptionInterface
{
    /** @param array<string> $errors */
    public function __construct(
        private readonly array $errors = [],
    ) {
        parent::__construct(\sprintf(
            "Unsupported feature(s) found in your schema:\n%s",
            implode("\n", $errors)
        ));
    }

    /** @return array<string> */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
