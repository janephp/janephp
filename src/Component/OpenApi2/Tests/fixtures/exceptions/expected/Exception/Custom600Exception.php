<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

abstract class Custom600Exception extends \RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 600);
    }
}