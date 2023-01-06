<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Message
     */
    private $messageObject;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Message $message, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad request on test exception');
        $this->messageObject = $message;
        $this->response = $response;
    }
    public function getMessageObject() : \Jane\Component\OpenApi3\Tests\Expected\Model\Message
    {
        return $this->messageObject;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}