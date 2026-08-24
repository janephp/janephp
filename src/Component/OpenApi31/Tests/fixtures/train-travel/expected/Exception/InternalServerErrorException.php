<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

abstract class InternalServerErrorException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 500);
    }
}