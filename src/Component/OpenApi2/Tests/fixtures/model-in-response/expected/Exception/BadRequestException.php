<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

abstract class BadRequestException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 400);
    }
}