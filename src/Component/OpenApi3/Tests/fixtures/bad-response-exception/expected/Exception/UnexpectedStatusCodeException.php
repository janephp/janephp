<?php

namespace Jane\Component\OpenApi3\Tests\BadResponse\Exception;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException
{
    public function __construct($status, $message = '')
    {
        parent::__construct($message, $status);
    }
}