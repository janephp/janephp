<?php

namespace Jane\Component\OpenApi31\Tests\Client\Exception;

class GetThingNotFoundException extends NotFoundException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Client\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Client\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Thing not found');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Jane\Component\OpenApi31\Tests\Client\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}