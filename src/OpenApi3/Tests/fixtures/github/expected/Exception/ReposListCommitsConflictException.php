<?php

namespace Github\Exception;

class ReposListCommitsConflictException extends \RuntimeException implements ClientException
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