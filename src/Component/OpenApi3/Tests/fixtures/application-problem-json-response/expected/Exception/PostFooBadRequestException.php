<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400
     */
    private $responseProblemDetailsResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400 $responseProblemDetailsResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('An error occurred');
        $this->responseProblemDetailsResponse400 = $responseProblemDetailsResponse400;
        $this->response = $response;
    }
    public function getResponseProblemDetailsResponse400() : \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400
    {
        return $this->responseProblemDetailsResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}