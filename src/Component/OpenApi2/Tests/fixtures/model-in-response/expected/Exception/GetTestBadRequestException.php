<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception;

class GetTestBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('bad request');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}