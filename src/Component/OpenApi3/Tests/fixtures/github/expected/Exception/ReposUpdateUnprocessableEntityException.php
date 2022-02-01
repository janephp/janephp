<?php

namespace Github\Exception;

class ReposUpdateUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\ValidationError
     */
    private $validationError;
    public function __construct(\Github\Model\ValidationError $validationError)
    {
        parent::__construct('Validation Failed');
        $this->validationError = $validationError;
    }
    public function getValidationError() : \Github\Model\ValidationError
    {
        return $this->validationError;
    }
}