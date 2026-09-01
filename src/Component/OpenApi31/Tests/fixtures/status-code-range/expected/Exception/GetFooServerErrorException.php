<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

class GetFooServerErrorException extends ServerErrorException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message
         */
        private readonly \Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message $messageObject,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Server error');
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