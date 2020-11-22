<?php

namespace Github\Exception;

class ActivityCheckRepoIsStarredByAuthenticatedUserNotFoundException extends \RuntimeException implements ClientException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Response if this repository is not starred by you', 404);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}