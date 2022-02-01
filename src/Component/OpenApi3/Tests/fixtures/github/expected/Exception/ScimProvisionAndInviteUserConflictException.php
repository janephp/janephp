<?php

namespace Github\Exception;

class ScimProvisionAndInviteUserConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ScimError
     */
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Conflict', 409);
        $this->scimError = $scimError;
    }
    public function getScimError() : \Github\Model\ScimError
    {
        return $this->scimError;
    }
}