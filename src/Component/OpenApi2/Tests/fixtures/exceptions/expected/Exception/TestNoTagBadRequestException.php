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
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad request on test exception');
    }
    public function getError(): \Jane\Component\OpenApi2\Tests\Expected\Exceptions\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}