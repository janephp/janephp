<?php

namespace Github\Exception;

class ScimDeleteUserFromOrgForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ScimError
     */
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Forbidden');
        $this->scimError = $scimError;
    }
    public function getScimError() : \Github\Model\ScimError
    {
        return $this->scimError;
    }
}