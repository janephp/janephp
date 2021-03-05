<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class 600Exception extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 600);
    }
}