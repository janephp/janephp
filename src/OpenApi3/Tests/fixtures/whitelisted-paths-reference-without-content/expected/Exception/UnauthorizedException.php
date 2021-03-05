<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class UnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 401);
    }
}