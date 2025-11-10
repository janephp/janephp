<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class FindL3AccessControlPoliciesByQueryCriteriaUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable Entity - Business rule violation');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}