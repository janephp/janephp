<?php

namespace Jane\Generated\DigitalOcean\Exception;

class KubernetesAddNodePoolInternalServerErrorException extends InternalServerErrorException
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
        parent::__construct('There was a server error.');
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