<?php

namespace Github\Exception;

class ScimListProvisionedIdentitiesBadRequestException extends BadRequestException
{
    /**
     * @var \Github\Model\ScimError
     */
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Bad Request');
        $this->scimError = $scimError;
    }
    public function getScimError() : \Github\Model\ScimError
    {
        return $this->scimError;
    }
}