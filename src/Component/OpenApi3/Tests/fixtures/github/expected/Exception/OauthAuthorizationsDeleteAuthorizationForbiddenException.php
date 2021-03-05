<?php

namespace Github\Exception;

class OauthAuthorizationsDeleteAuthorizationForbiddenException extends ForbiddenException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Forbidden', 403);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}