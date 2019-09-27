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
    protected $formParameters = [];
    protected $body;

    abstract public function getMethod(): string;

    abstract public function getBody(SerializerInterface $serializer, $streamFactory = null): array;

    abstract public function getUri(): string;

    abstract protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType);

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

    protected function getFormBody(): array
    {
        return [
            ['Content-Type' => ['application/x-www-form-urlencoded']],
            http_build_query($this->getFormOptionsResolver()->resolve($this->formParameters)),
        ];
    }

    protected function getMultipartBody(StreamFactory $streamFactory = null): array
    {
        $bodyBuilder = new MultipartStreamBuilder($streamFactory);
        $formParameters = $this->getFormOptionsResolver()->resolve($this->formParameters);

        foreach ($formParameters as $key => $value) {
            $bodyBuilder->addResource($key, $value);
        }

        return [
            ['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]],
            $bodyBuilder->build(),
        ];
    }

    protected function getSerializedBody(SerializerInterface $serializer): array
    {
        return [
            ['Content-Type' => ['application/json']],
            $serializer->serialize($this->body, 'json'),
        ];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getFormOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
}
