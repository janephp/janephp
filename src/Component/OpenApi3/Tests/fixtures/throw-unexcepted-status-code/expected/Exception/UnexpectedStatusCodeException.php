<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException, WithResponseInterface
{
    /**
     * @var \Psr\Http\Message\ResponseInterface|null
     */
    private $response;
    public function __construct($status, $message = '', ?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct($message, $status);
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}