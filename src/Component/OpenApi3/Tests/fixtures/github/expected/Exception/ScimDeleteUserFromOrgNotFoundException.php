<?php

namespace Github\Exception;

class ScimDeleteUserFromOrgNotFoundException extends \RuntimeException implements ClientException
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