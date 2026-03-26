<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class CreateSpecialEventNotFoundException extends NotFoundException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not found.');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Jane\Component\OpenApi31\Tests\Expected\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}