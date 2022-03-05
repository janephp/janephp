<?php

namespace Docker\Api\Exception;

class ContainerRenameConflictException extends ConflictException
{
    /**
     * @var \Docker\Api\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Docker\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('name already in use');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}