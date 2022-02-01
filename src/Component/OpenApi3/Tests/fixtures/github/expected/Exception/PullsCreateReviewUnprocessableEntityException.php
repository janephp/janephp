<?php

namespace Github\Exception;

class PullsCreateReviewUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\ValidationErrorSimple
     */
    private $validationErrorSimple;
    public function __construct(\Github\Model\ValidationErrorSimple $validationErrorSimple)
    {
        parent::__construct('Validation Failed');
        $this->validationErrorSimple = $validationErrorSimple;
    }
    public function getValidationErrorSimple() : \Github\Model\ValidationErrorSimple
    {
        return $this->validationErrorSimple;
    }
}