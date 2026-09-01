<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class UpdatePlanetBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError $badRequestError,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
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