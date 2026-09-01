<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class GetTokenTooManyRequestsException extends TooManyRequestsException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError $tooManyRequestsError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Too Many Requests');
    }
    public function getTooManyRequestsError(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError
    {
        return $this->tooManyRequestsError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}