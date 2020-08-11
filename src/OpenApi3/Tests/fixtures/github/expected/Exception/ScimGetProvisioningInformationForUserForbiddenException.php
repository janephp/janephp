<?php

namespace Github\Exception;

class ScimGetProvisioningInformationForUserForbiddenException extends \RuntimeException implements ClientException
{
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Forbidden', 403);
        $this->scimError = $scimError;
    }
    public function getScimError()
    {
        return $this->scimError;
    }
}