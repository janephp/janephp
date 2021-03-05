<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class 600Exception extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 600);
    }
}