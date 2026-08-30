<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Exception;

abstract class NotFoundException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}