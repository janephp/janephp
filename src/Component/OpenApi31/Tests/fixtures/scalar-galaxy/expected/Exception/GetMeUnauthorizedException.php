<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class GetMeUnauthorizedException extends UnauthorizedException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError $unauthorizedError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Unauthorized');
    }
    public function getUnauthorizedError(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError
    {
        return $this->unauthorizedError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}