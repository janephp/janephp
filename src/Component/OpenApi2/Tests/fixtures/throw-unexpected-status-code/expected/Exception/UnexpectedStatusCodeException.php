<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Exception;

class UnexpectedStatusCodeException extends \RuntimeException implements ClientException, WithResponseInterface
{
    /**
     * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
     */
    private $response;
    public function __construct($status, $message = '', ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null)
    {
        parent::__construct($message, $status);
        $this->response = $response;
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}