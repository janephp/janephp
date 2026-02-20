<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class UpdatePlanetBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError
     */
    private $badRequestError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError $badRequestError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->badRequestError = $badRequestError;
        $this->response = $response;
    }
    public function getBadRequestError(): \Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError
    {
        return $this->badRequestError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}