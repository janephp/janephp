<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use RuntimeException;
class MissingRequiredPropertyException extends RuntimeException implements JaneExceptionInterface
{
    public function __construct(string $property, string $class)
    {
        parent::__construct(sprintf('Required property "%s" is missing in the payload denormalized into "%s".', $property, $class));
    }
}