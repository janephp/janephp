<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsReferenceWithoutContent\Exception;

class GetFooUnauthorizedException extends UnauthorizedException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('User must be identified to access this resource');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}