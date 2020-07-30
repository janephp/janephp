<?php

namespace Github\Exception;

class ReposUpdateWebhookUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $validationError;
    public function __construct(\Github\Model\ValidationError $validationError)
    {
        parent::__construct('Validation Failed', 422);
        $this->validationError = $validationError;
    }
    public function getValidationError()
    {
        return $this->validationError;
    }
}