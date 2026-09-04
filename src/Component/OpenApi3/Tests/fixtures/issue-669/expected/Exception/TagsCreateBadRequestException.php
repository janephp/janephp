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
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getErrorWithRootCauses(): \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses
    {
        return $this->errorWithRootCauses;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}