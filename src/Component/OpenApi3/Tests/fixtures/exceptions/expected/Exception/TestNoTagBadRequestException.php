<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Message
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Model\Message $messageObject,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad request on test exception');
    }
    public function getMessageObject(): \Jane\Component\OpenApi3\Tests\Expected\Model\Message
    {
        return $this->messageObject;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}