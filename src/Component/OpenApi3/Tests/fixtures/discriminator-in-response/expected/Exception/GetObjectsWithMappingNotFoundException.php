<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetObjectsWithMappingNotFoundException extends \RuntimeException implements ClientException
{
    private $responseError;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseError $responseError)
    {
        parent::__construct('not found', 404);
        $this->responseError = $responseError;
    }
    public function getResponseError()
    {
        return $this->responseError;
    }
}