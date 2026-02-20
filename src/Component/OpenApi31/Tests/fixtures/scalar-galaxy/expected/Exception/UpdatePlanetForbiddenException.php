<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class UpdatePlanetForbiddenException extends ForbiddenException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError
     */
    private $forbiddenError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError $forbiddenError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->forbiddenError = $forbiddenError;
        $this->response = $response;
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