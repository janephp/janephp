<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class FindServicesGuestAccessByQueryCriteriaForbiddenException extends ForbiddenException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(?\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Forbidden - Lack of admin privilege');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}