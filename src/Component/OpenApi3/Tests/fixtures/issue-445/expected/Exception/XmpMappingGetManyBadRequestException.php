<?php

namespace PicturePark\API\Exception;

class XmpMappingGetManyBadRequestException extends BadRequestException
{
    /**
     * @var \PicturePark\API\Model\RequestSizeLimitExceededException
     */
    private $requestSizeLimitExceededException;
    public function __construct(\PicturePark\API\Model\RequestSizeLimitExceededException $requestSizeLimitExceededException)
    {
        parent::__construct('List of IDs exceeded maximum size');
        $this->requestSizeLimitExceededException = $requestSizeLimitExceededException;
    }
    public function getRequestSizeLimitExceededException() : \PicturePark\API\Model\RequestSizeLimitExceededException
    {
        return $this->requestSizeLimitExceededException;
    }
}