<?php

namespace Github\Exception;

class GistsListCommentsNotFoundException extends NotFoundException
{
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Resource Not Found', 404);
        $this->basicError = $basicError;
    }
    public function getBasicError()
    {
        return $this->basicError;
    }
}