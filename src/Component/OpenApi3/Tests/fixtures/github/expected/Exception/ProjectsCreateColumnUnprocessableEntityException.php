<?php

namespace Github\Exception;

class ProjectsCreateColumnUnprocessableEntityException extends UnprocessableEntityException
{
    private $validationErrorSimple;
    public function __construct(\Github\Model\ValidationErrorSimple $validationErrorSimple)
    {
        parent::__construct('Validation Failed', 422);
        $this->validationErrorSimple = $validationErrorSimple;
    }
    public function getValidationErrorSimple()
    {
        return $this->validationErrorSimple;
    }
}