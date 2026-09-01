<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Model\Message
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Model\Message $messageObject,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad request on test exception');
    }
    public function getMessageObject(): \Jane\Component\OpenApi3\Tests\Expected\Exceptions\Model\Message
    {
        return $this->messageObject;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}