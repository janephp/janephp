<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Exception;

class TestBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Model\Failure
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Model\Failure $failure,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getFailure(): \Jane\Component\OpenApi3\Tests\Expected\ResponseReferenceWithSchemaReference\Model\Failure
    {
        return $this->failure;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}