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
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Server error');
    }
    public function getMessageObject(): \Jane\Component\OpenApi31\Tests\StatusCodeRange\Model\Message
    {
        return $this->messageObject;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}