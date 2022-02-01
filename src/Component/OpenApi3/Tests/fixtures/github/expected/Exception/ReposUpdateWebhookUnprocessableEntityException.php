<?php

namespace Github\Exception;

class ReposUpdateWebhookUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\ValidationError
     */
    private $validationError;
    public function __construct(\Github\Model\ValidationError $validationError)
    {
        parent::__construct('Validation Failed', 422);
        $this->validationError = $validationError;
    }
    public function getValidationError() : \Github\Model\ValidationError
    {
        return $this->validationError;
    }
}