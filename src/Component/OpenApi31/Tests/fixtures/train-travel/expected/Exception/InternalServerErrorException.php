<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

abstract class InternalServerErrorException extends \RuntimeException implements ServerException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 500);
    }
}