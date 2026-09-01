<?php

namespace Jane\Generated\DigitalOcean\Exception;

class VolumeActionsPostByIdNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Generated\DigitalOcean\Model\Error
         */
        private readonly \Jane\Generated\DigitalOcean\Model\Error $error,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('The resource was not found.');
    }
    public function getError(): \Jane\Generated\DigitalOcean\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}