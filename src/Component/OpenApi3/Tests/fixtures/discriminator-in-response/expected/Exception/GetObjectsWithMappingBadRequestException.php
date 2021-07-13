<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetObjectsWithMappingBadRequestException extends \RuntimeException implements ClientException
{
    private $responseError;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseError $responseError)
    {
        parent::__construct('bad request', 400);
        $this->responseError = $responseError;
    }
    public function getResponseError()
    {
        return $this->responseError;
    }
}