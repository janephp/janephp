<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

final class UnexpectedStatusCodeException extends \RuntimeException implements ClientException
{
    public function __construct($status, $message = '')
    {
        parent::__construct($message, $status);
    }
}