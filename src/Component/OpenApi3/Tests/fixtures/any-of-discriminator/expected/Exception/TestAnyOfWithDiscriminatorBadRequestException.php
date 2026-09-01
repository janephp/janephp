<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestAnyOfWithDiscriminatorBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping $fooBarWithMapping,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('some error');
    }
    public function getFooBarWithMapping(): \Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping
    {
        return $this->fooBarWithMapping;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}