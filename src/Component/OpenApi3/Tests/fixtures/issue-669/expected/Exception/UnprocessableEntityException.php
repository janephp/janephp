<?php

namespace Jane\Generated\DigitalOcean\Exception;

abstract class UnprocessableEntityException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 422);
    }
}