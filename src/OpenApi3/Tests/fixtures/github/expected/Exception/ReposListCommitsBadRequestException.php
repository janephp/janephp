<?php

namespace Github\Exception;

class ReposListCommitsBadRequestException extends BadRequestException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Bad Request', 400);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}