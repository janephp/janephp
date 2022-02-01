<?php

namespace Github\Exception;

class ActivityMarkThreadAsReadForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Forbidden');
        $this->basicError = $basicError;
    }
    public function getBasicError() : \Github\Model\BasicError
    {
        return $this->basicError;
    }
}