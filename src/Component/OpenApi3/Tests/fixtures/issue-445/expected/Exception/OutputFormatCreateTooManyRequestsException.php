<?php

namespace PicturePark\API\Exception;

class OutputFormatCreateTooManyRequestsException extends TooManyRequestsException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Too many requests');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}