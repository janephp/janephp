<?php

namespace PicturePark\API\Exception;

class XmpMappingGetManyBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\RequestSizeLimitExceededException
         */
        private readonly \PicturePark\API\Model\RequestSizeLimitExceededException $requestSizeLimitExceededException,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('List of IDs exceeded maximum size');
    }
    public function getRequestSizeLimitExceededException(): \PicturePark\API\Model\RequestSizeLimitExceededException
    {
        return $this->requestSizeLimitExceededException;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}