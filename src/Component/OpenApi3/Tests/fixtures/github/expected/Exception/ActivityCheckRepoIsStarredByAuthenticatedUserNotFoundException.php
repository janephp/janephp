<?php

namespace Github\Exception;

class ActivityCheckRepoIsStarredByAuthenticatedUserNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Response if this repository is not starred by you');
        $this->basicError = $basicError;
    }
    public function getBasicError() : \Github\Model\BasicError
    {
        return $this->basicError;
    }
}