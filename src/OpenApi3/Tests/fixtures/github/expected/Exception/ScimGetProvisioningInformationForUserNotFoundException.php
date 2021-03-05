<?php

namespace Github\Exception;

class ScimGetProvisioningInformationForUserNotFoundException extends NotFoundException
{
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Resource Not Found', 404);
        $this->scimError = $scimError;
    }
    public function getScimError()
    {
        return $this->scimError;
    }
}