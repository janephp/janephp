<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception;

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