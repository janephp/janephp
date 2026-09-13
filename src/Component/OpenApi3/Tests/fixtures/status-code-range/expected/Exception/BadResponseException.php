<?php

namespace Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception;

class BadResponseException extends UnexpectedStatusCodeException
{
    public function __construct($status, $message = '', ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null)
    {
        parent::__construct($status, $message, $response);
    }
}