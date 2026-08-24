<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

abstract class ForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}