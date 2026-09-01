<?php

namespace Jane\Generated\DigitalOcean\Exception;

class ProjectsDeletePreconditionFailedException extends PreconditionFailedException
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
        parent::__construct('Only an empty project can be deleted.');
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