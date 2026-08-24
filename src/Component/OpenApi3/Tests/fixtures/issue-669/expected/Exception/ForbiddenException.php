<?php

namespace Jane\Generated\DigitalOcean\Exception;

abstract class ForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}