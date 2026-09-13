<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Exception;

class BadResponseException extends UnexpectedStatusCodeException
{
    public function __construct($status, $message = '', ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null)
    {
        parent::__construct($status, $message, $response);
    }
}