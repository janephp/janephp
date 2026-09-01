<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class CreateUserForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError $forbiddenError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Forbidden');
    }
    public function getForbiddenError(): \Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError
    {
        return $this->forbiddenError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}