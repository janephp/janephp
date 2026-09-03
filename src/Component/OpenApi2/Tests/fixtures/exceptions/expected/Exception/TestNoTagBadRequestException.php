<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exceptions\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi2\Tests\Expected\Exceptions\Model\Error
         */
        private readonly \Jane\Component\OpenApi2\Tests\Expected\Exceptions\Model\Error $error,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad request on test exception');
    }
    public function getError(): \Jane\Component\OpenApi2\Tests\Expected\Exceptions\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}