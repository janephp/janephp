<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception;

class GetTokenUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError
     */
    private $unauthorizedError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UnauthorizedError $unauthorizedError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->unauthorizedError = $unauthorizedError;
        $this->response = $response;
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