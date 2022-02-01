<?php

namespace Github\Exception;

class IssuesCheckUserCanBeAssignedNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Otherwise a `404` status code is returned.');
        $this->basicError = $basicError;
    }
    public function getBasicError() : \Github\Model\BasicError
    {
        return $this->basicError;
    }
}