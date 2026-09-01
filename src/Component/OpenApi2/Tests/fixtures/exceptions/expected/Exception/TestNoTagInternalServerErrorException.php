<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exceptions\Exception;

class TestNoTagInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Internal server error on test exception');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}