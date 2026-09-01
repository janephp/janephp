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
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Too Many Requests');
    }
    public function getTooManyRequestsError(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\TooManyRequestsError
    {
        return $this->tooManyRequestsError;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}