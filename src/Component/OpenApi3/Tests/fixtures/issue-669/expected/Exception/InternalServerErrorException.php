<?php

namespace Jane\Generated\DigitalOcean\Exception;

class InternalServerErrorException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 500);
    }
}