<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

abstract class TooManyRequestsException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 429);
    }
}