<?php

namespace Jane\Generated\DigitalOcean\Exception;

class CertificatesCreateInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Jane\Generated\DigitalOcean\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Generated\DigitalOcean\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('There was a server error.');
        $this->error = $error;
        $this->response = $response;
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