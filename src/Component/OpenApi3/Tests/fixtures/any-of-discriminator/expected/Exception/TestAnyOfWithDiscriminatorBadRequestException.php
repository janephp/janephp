<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestAnyOfWithDiscriminatorBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping
     */
    private $fooBarWithMapping;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping $fooBarWithMapping, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('some error');
        $this->fooBarWithMapping = $fooBarWithMapping;
        $this->response = $response;
    }
    public function getFooBarWithMapping() : \Jane\Component\OpenApi3\Tests\Expected\Model\FooBarWithMapping
    {
        return $this->fooBarWithMapping;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}