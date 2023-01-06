<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Two\Runtime\Client;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
abstract class BaseEndpoint implements Endpoint
{
    protected $queryParameters = [];
    protected $headerParameters = [];
    protected $body;
    public abstract function getMethod() : string;
    public abstract function getBody(SerializerInterface $serializer, $streamFactory = null) : array;
    public abstract function getUri() : string;
    public abstract function getAuthenticationScopes() : array;
    protected abstract function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
    protected function getExtraHeaders() : array
    {
        return [];
    }
    public function getQueryString() : string
    {
        $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        $optionsResolved = array_map(function ($value) {
            return null !== $value ? $value : '';
        }, $optionsResolved);
        return http_build_query($optionsResolved, '', '&', PHP_QUERY_RFC3986);
    }
    public function getHeaders(array $baseHeaders = []) : array
    {
        return array_merge($this->getExtraHeaders(), $baseHeaders, $this->getHeadersOptionsResolver()->resolve($this->headerParameters));
    }
    protected function getQueryOptionsResolver() : OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getHeadersOptionsResolver() : OptionsResolver
    {
        return new OptionsResolver();
    }
    // ----------------------------------------------------------------------------------------------------
    // Used for OpenApi2 compatibility
    protected function getFormBody() : array
    {
        return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($this->getFormOptionsResolver()->resolve($this->formParameters))];
    }
    protected function getMultipartBody($streamFactory = null) : array
    {
        $bodyBuilder = new MultipartStreamBuilder($streamFactory);
        $formParameters = $this->getFormOptionsResolver()->resolve($this->formParameters);
        foreach ($formParameters as $key => $value) {
            $bodyBuilder->addResource($key, $value);
        }
        return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
    }
    protected function getFormOptionsResolver() : OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getSerializedBody(SerializerInterface $serializer) : array
    {
        return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
    }
}