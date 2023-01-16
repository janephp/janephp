<?php

namespace Github\Exception;

class ReposDeleteDeploymentUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\ValidationErrorSimple
     */
    private $validationErrorSimple;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ValidationErrorSimple $validationErrorSimple, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Failed');
        $this->validationErrorSimple = $validationErrorSimple;
        $this->response = $response;
    }
    public function getValidationErrorSimple() : \Github\Model\ValidationErrorSimple
    {
        return $this->validationErrorSimple;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}