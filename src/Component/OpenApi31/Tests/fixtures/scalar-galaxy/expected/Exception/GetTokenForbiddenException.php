<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class GetTokenForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError $forbiddenError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Forbidden');
    }
    public function getForbiddenError(): \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError
    {
        return $this->forbiddenError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}