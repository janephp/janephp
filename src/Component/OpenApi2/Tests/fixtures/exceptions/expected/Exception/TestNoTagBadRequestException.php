<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi2\Tests\Expected\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad request on test exception');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError() : \Jane\Component\OpenApi2\Tests\Expected\Model\Error
    {
        return $this->error;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}