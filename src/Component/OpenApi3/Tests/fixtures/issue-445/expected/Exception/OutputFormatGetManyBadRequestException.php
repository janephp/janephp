<?php

namespace PicturePark\API\Exception;

class OutputFormatGetManyBadRequestException extends BadRequestException
{
    /**
     * @var \PicturePark\API\Model\RequestSizeLimitExceededException
     */
    private $requestSizeLimitExceededException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\PicturePark\API\Model\RequestSizeLimitExceededException $requestSizeLimitExceededException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('List of IDs exceeded maximum size');
        $this->requestSizeLimitExceededException = $requestSizeLimitExceededException;
        $this->response = $response;
    }
    public function getRequestSizeLimitExceededException() : \PicturePark\API\Model\RequestSizeLimitExceededException
    {
        return $this->requestSizeLimitExceededException;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}