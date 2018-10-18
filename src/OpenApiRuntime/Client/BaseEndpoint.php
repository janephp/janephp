<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\StreamFactory;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

abstract class BaseEndpoint implements Endpoint
{
    protected $queryParameters = [];
    protected $headerParameters = [];
    protected $body;

    abstract public function getMethod(): string;

    abstract public function getBody(SerializerInterface $serializer, StreamFactory $streamFactory = null): array;

    abstract public function getUri(): string;

    abstract protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer);

    protected function getExtraHeaders(): array
    {
        return [];
    }

    public function getQueryString(): string
    {
        return http_build_query($this->getQueryOptionsResolver()->resolve($this->queryParameters), null, '&', PHP_QUERY_RFC3986);
    }

    public function getHeaders(array $baseHeaders = []): array
    {
        return array_merge($this->getExtraHeaders(), $baseHeaders, $this->getHeadersOptionsResolver()->resolve($this->headerParameters));
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
}
