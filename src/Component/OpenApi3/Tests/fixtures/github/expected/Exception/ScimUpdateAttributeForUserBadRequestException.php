<?php

namespace Github\Exception;

class ScimUpdateAttributeForUserBadRequestException extends BadRequestException
{
    private $scimError;
    public function __construct(\Github\Model\ScimError $scimError)
    {
        parent::__construct('Bad Request', 400);
        $this->scimError = $scimError;
    }
    public function getScimError()
    {
        return $this->scimError;
    }
}