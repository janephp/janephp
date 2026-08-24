<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException
{
    public function __construct($status, $message = '')
    {
        parent::__construct($message, $status);
    }
}