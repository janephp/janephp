<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class BadResponseException extends UnexpectedStatusCodeException
{
    public function __construct($status, $message = '', ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct($status, $message, $response);
    }
}