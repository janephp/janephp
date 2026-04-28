<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Runtime\Client;

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
        $allowReserved = $this->getQueryAllowReserved();
        $queryParameters = [];
        foreach ($optionsResolved as $key => $value) {
            $allowReservedKey = in_array($key, $allowReserved, true);
            $queryParameters[] = $this->encodeValue($key, $value, $allowReservedKey);
        }
        return implode('&', $queryParameters);
    }
    public function getHeaders(array $baseHeaders = []): array
    {
        return array_merge($this->getExtraHeaders(), $baseHeaders, $this->getHeadersOptionsResolver()->resolve($this->headerParameters));
    }
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getQueryAllowReserved(): array
    {
        return [];
    }
    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
    // ----------------------------------------------------------------------------------------------------
    // Used for OpenApi2 compatibility
    protected function getFormBody(): array
    {
        return [['Content-Type' => ['application/x-www-form-urlencoded']], http_build_query($this->getFormOptionsResolver()->resolve($this->formParameters))];
    }
    protected function getMultipartBody($streamFactory = null): array
    {
        $bodyBuilder = new MultipartStreamBuilder($streamFactory);
        $formParameters = $this->getFormOptionsResolver()->resolve($this->formParameters);
        foreach ($formParameters as $key => $value) {
            $bodyBuilder->addResource($key, $value);
        }
        return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
    }
    protected function getFormOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getSerializedBody(SerializerInterface $serializer): array
    {
        return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
    }
    private function encodeValue(string $key, mixed $value, bool $allowReserved): string
    {
        return match (true) {
            is_int($value) => $this->encodeIntValue($key, $value, $allowReserved),
            is_bool($value) => $this->encodeIntValue($key, (int) $value, $allowReserved),
            is_string($value) => $this->encodeStringValue($key, $value, $allowReserved),
            is_float($value) => $this->encodeStringValue($key, (string) $value, $allowReserved),
            is_array($value) => $this->encodeArrayValue($key, $value, $allowReserved),
            default => throw new InvalidArgumentException(sprintf('Query value for key %s must be either int|string|float|array|bool, %s given', $key, gettype($value))),
        };
    }
    private function encodeIntValue(string $queryParamName, int $value, bool $allowReserved): string
    {
        $queryParamName = rawurlencode($queryParamName);
        return sprintf('%s=%s', $queryParamName, $allowReserved ? $value : rawurlencode((string) $value));
    }
    private function encodeStringValue(string $queryParamName, string $value, bool $allowReserved): string
    {
        $queryParamName = rawurlencode($queryParamName);
        return sprintf('%s=%s', $queryParamName, $allowReserved ? $value : rawurlencode($value));
    }
    private function encodeArrayValue(string $queryParamName, array $value, bool $allowReserved): string
    {
        $params = [];
        foreach ($value as $subKey => $subValue) {
            $arrayKey = $queryParamName . '[' . rawurlencode((string) $subKey) . ']';
            $params[] = $this->encodeValue($arrayKey, $subValue, $allowReserved);
        }
        return implode('&', $params);
    }
}