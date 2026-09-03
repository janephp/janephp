<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Exception;

class PostFooBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse400
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse400 $responseProblemDetailsResponse400,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('An error occurred');
    }
    public function getResponseProblemDetailsResponse400(): \Jane\Component\OpenApi3\Tests\Expected\ApplicationProblemJsonResponse\Model\ResponseProblemDetailsResponse400
    {
        return $this->responseProblemDetailsResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}