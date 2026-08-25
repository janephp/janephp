<?php

namespace Docker\Api\Exception;

abstract class ServiceUnavailableException extends \RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 503);
    }
}