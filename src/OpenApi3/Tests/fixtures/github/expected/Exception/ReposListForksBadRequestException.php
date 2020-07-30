<?php

namespace Github\Exception;

class ReposListForksBadRequestException extends \RuntimeException implements ClientException
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