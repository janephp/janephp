<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Exception;

class TestAnyOfWithDiscriminatorBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBarWithMapping
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBarWithMapping $fooBarWithMapping,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('some error');
    }
    public function getFooBarWithMapping(): \Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model\FooBarWithMapping
    {
        return $this->fooBarWithMapping;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}