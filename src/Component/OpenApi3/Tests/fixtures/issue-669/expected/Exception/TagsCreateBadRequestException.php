<?php

namespace Jane\Generated\DigitalOcean\Exception;

class TagsCreateBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses
     */
    private $errorWithRootCauses;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses $errorWithRootCauses, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->errorWithRootCauses = $errorWithRootCauses;
        $this->response = $response;
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