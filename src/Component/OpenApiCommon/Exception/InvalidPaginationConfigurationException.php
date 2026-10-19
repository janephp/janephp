<?php

namespace Jane\Component\OpenApiCommon\Exception;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

/**
 * Thrown when the `pagination` option cannot be applied to the specification.
 *
 * Carries one human readable entry per violation so every problem of the
 * configuration is reported in a single run.
 */
class InvalidPaginationConfigurationException extends \InvalidArgumentException implements JaneExceptionInterface
{
    /** @param list<string> $errors */
    public function __construct(
        private readonly array $errors = [],
    ) {
        parent::__construct(\sprintf(
            "Invalid \"pagination\" configuration:\n%s",
            implode("\n", $errors)
        ));
    }

    /** @return list<string> */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
