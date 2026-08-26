<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

abstract class ServerErrorException extends \RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}