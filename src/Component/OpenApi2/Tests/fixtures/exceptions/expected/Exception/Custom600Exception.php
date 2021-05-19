<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class Custom600Exception extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 600);
    }
}