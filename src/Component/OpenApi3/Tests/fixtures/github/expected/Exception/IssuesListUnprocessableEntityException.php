<?php

namespace Github\Exception;

class IssuesListUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\ValidationError
     */
    private $validationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ValidationError $validationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Failed');
        $this->validationError = $validationError;
        $this->response = $response;
    }
    public function getValidationError() : \Github\Model\ValidationError
    {
        return $this->validationError;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}