<?php

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

abstract class BaseEndpoint implements Endpoint
{
    protected array $formParameters = [];
    protected array $queryParameters = [];
    protected array $headerParameters = [];
    protected mixed $body;

    abstract public function getMethod(): string;

    abstract public function getBody(SerializerInterface $serializer, $streamFactory = null): array;

    abstract public function getUri(): string;

    abstract public function getAuthenticationScopes(): array;

    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);

    protected function getExtraHeaders(): array
    {
        return [];
    }

    public function getQueryString(): string
    {
        $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        $optionsResolved = array_map(static function ($value) {
            return $value ?? '';
        }, $optionsResolved);

        return http_build_query($optionsResolved, '', '&', \PHP_QUERY_RFC3986);
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

    // ----------------------------------------------------------------------------------------------------
    // Used for OpenApi2 compatibility

    protected function getFormBody(): array
    {
        return [
            ['Content-Type' => ['application/x-www-form-urlencoded']],
            http_build_query($this->getFormOptionsResolver()->resolve($this->formParameters)),
        ];
    }

    protected function getMultipartBody($streamFactory = null): array
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

    protected function getFormOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    protected function getSerializedBody(SerializerInterface $serializer): array
    {
        return [
            ['Content-Type' => ['application/json']],
            $serializer->serialize($this->body, 'json'),
        ];
    }
}
