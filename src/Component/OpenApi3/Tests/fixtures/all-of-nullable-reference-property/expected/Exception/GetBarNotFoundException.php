<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfNullableReferenceProperty\Exception;

class GetBarNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Resource not found');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}