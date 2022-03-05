<?php

namespace Docker\Api\Exception;

class VolumeDeleteConflictException extends ConflictException
{
    /**
     * @var \Docker\Api\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Docker\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Volume is in use and cannot be removed');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}