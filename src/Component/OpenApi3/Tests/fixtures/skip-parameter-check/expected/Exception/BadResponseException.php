<?php

namespace Jane\OpenApi3\Tests\Expected\SkipParameterCheck\Exception;

class BadResponseException extends UnexpectedStatusCodeException
{
    public function __construct($status, $message = '', ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null)
    {
        parent::__construct($status, $message, $response);
    }
}