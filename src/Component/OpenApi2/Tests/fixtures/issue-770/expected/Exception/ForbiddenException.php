<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

abstract class ForbiddenException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}