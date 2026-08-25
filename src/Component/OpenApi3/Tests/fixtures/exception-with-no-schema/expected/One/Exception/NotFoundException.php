<?php

namespace Jane\Component\OpenApi3\Tests\Expected\One\Exception;

abstract class NotFoundException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}