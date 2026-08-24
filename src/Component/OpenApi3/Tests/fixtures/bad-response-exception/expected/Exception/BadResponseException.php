<?php

namespace Jane\Component\OpenApi3\Tests\BadResponse\Exception;

class BadResponseException extends UnexpectedStatusCodeException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface|null
     */
    private $response;
    public function __construct($status, $message = '', ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct($status, $message);
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}