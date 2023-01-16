<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetTestBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('bad request');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError() : \Jane\Component\OpenApi3\Tests\Expected\Model\Error
    {
        return $this->error;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}