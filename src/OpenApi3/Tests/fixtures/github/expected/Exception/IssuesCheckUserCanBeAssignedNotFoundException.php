<?php

namespace Github\Exception;

class IssuesCheckUserCanBeAssignedNotFoundException extends NotFoundException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Otherwise a `404` status code is returned.', 404);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}