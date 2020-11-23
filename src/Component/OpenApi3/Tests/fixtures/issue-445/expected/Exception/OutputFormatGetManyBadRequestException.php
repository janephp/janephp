<?php

namespace PicturePark\API\Exception;

class OutputFormatGetManyBadRequestException extends \RuntimeException implements ClientException
{
    private $requestSizeLimitExceededException;
    public function __construct(\PicturePark\API\Model\RequestSizeLimitExceededException $requestSizeLimitExceededException)
    {
        parent::__construct('List of IDs exceeded maximum size', 400);
        $this->requestSizeLimitExceededException = $requestSizeLimitExceededException;
    }
    public function getRequestSizeLimitExceededException()
    {
        return $this->requestSizeLimitExceededException;
    }
}