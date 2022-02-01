<?php

namespace Github\Exception;

class ReposUpdateInformationAboutPagesSiteBadRequestException extends BadRequestException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    public function __construct(\Github\Model\BasicError $basicError)
    {
        parent::__construct('Bad Request');
        $this->basicError = $basicError;
    }
    public function getBasicError() : \Github\Model\BasicError
    {
        return $this->basicError;
    }
}