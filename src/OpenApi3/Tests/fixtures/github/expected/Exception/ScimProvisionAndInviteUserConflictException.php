<?php

namespace Github\Exception;

class ScimProvisionAndInviteUserConflictException extends ConflictException
{
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Conflict', 409);
        $this->scimError = $scimError;
    }
    public function getScimError()
    {
        return $this->scimError;
    }
}