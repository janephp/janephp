<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
     */
    private $responseProblemDetailsResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500 $responseProblemDetailsResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('An error occurred');
        $this->responseProblemDetailsResponse500 = $responseProblemDetailsResponse500;
        $this->response = $response;
    }
    public function getResponseProblemDetailsResponse500() : \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
    {
        return $this->responseProblemDetailsResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}