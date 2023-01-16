<?php

namespace Github\Exception;

class ScimListProvisionedIdentitiesNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\ScimError
     */
    private $scimError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ScimError $scimError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Resource Not Found');
        $this->scimError = $scimError;
        $this->response = $response;
    }
    public function getScimError() : \Github\Model\ScimError
    {
        return $this->scimError;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}