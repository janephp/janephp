<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

class GetFooServerErrorException extends ServerErrorException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message
     */
    private $messageObject;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message $message, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Server error');
        $this->messageObject = $message;
        $this->response = $response;
    }
    public function getMessageObject(): \Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message
    {
        return $this->messageObject;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}