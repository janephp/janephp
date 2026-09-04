<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Exception;

class FindProfilesTunnelRuckusgreByQueryCriteriaForbiddenException extends ForbiddenException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Forbidden - Lack of admin privilege');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}