<?php

namespace Jane\Generated\DigitalOcean\Exception;

class TagsCreateBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses
         */
        private readonly \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses $errorWithRootCauses,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getErrorWithRootCauses(): \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses
    {
        return $this->errorWithRootCauses;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}