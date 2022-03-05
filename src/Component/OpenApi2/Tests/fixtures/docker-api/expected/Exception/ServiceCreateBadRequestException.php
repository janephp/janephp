<?php

namespace Docker\Api\Exception;

class ServiceCreateBadRequestException extends BadRequestException
{
    /**
     * @var \Docker\Api\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Docker\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('bad parameter');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}