<?php

namespace Docker\Api\Exception;

class PluginUpgradeNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Docker\Api\Model\ErrorResponse
         */
        private readonly \Docker\Api\Model\ErrorResponse $errorResponse,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('plugin not installed');
    }
    public function getErrorResponse(): \Docker\Api\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}