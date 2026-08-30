<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

abstract class InternalServerErrorException extends \RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 500);
    }
}