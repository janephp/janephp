<?php

namespace Docker\Api\Exception;

class PluginPushNotFoundException extends NotFoundException
{
    /**
     * @var \Docker\Api\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Docker\Api\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('plugin not installed');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse() : \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}