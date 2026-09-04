<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

class UpdateRkszonesAaaLdapByIdInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Internal Server Error');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}