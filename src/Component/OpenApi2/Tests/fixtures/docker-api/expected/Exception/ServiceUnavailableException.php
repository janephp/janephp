<?php

namespace Docker\Api\Exception;

class ServiceUnavailableException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 503);
    }
}