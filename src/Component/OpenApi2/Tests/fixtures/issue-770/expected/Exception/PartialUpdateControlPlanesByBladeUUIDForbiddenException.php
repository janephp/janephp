<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

class PartialUpdateControlPlanesByBladeUUIDForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Forbidden - Lack of admin privilege');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}