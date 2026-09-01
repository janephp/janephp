<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetPermissionsManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Too many requests');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}