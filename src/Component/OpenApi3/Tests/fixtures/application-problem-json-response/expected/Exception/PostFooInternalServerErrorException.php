<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500 $responseProblemDetailsResponse500,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('An error occurred');
    }
    public function getResponseProblemDetailsResponse500(): \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
    {
        return $this->responseProblemDetailsResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}