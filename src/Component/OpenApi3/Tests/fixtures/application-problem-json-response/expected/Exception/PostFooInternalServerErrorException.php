<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception;

class PostFooInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse500
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse500 $responseProblemDetailsResponse500,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('An error occurred');
    }
    public function getResponseProblemDetailsResponse500(): \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse500
    {
        return $this->responseProblemDetailsResponse500;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}