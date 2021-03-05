<?php

namespace Github\Exception;

class ProjectsListCardsUnauthorizedException extends UnauthorizedException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Requires Authentication', 401);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}