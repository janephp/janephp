<?php

namespace Github\Exception;

class IssuesCreateGoneException extends GoneException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Gone');
        $this->basicError = $basicError;
    }
    public function getBasicError() : \Github\Model\BasicError
    {
        return $this->basicError;
    }
}