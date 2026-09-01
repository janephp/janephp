<?php

namespace Jane\Generated\DigitalOcean\Exception;

class DropletsDestroyRetryWithAssociatedResourcesNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Generated\DigitalOcean\Model\Error
         */
        private readonly \Jane\Generated\DigitalOcean\Model\Error $error,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('The resource was not found.');
    }
    public function getError(): \Jane\Generated\DigitalOcean\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}