<?php

namespace Docker\Api\Exception;

class SwarmUnlockkeyInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Docker\Api\Model\ErrorResponse
         */
        private readonly \Docker\Api\Model\ErrorResponse $errorResponse,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('server error');
    }
    public function getErrorResponse(): \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}