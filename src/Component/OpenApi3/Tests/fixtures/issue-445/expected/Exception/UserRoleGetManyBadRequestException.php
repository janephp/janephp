<?php

namespace PicturePark\API\Exception;

class UserRoleGetManyBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\RequestSizeLimitExceededException
         */
        private readonly \PicturePark\API\Model\RequestSizeLimitExceededException $requestSizeLimitExceededException,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('List of IDs exceeded maximum size');
    }
    public function getRequestSizeLimitExceededException(): \PicturePark\API\Model\RequestSizeLimitExceededException
    {
        return $this->requestSizeLimitExceededException;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}