<?php

namespace Github\Exception;

class IAmATeapotException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 418);
    }
}