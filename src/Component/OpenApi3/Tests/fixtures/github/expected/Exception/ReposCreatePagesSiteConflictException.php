<?php

namespace Github\Exception;

class ReposCreatePagesSiteConflictException extends ConflictException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Conflict', 409);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}