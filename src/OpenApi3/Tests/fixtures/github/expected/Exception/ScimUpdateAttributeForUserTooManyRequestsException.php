<?php

namespace Github\Exception;

class ScimUpdateAttributeForUserTooManyRequestsException extends \RuntimeException implements ClientException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Too many requests', 429);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}