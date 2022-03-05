<?php

namespace Docker\Api\Exception;

class NetworkInspectNotFoundException extends NotFoundException
{
    /**
     * @var \Docker\Api\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Docker\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Network not found');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}