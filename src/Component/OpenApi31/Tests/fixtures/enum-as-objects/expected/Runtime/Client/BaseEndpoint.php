<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Runtime\Client;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;
abstract class BaseEndpoint implements Endpoint
{
    protected array $formParameters = [];
    protected array $queryParameters = [];
    protected array $headerParameters = [];
    protected mixed $body;
    abstract public function getMethod(): string;
    abstract public function getBody(SerializerInterface $serializer, ?StreamFactoryInterface $streamFactory = null): array;
    abstract public function getUri(): string;
    abstract public function getAuthenticationScopes(): array;
    /**
     * Transform the response body into a value for the requested fetch mode.
     *
     * @return mixed
     */
    abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
    protected function getExtraHeaders(): array
    {
        return [];
    }
    public function getQueryString(): string
    {
        $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        $styles = $this->getQueryStyles();
        $allowReserved = $this->getQueryAllowReserved();
        $queryParameters = [];
        foreach ($optionsResolved as $key => $value) {
            if (\array_key_exists($key, $styles)) {
                if (null === $value) {
                    continue;
                }
                foreach ($this->encodeStyledValue($key, $value, $styles[$key], \in_array($key, $allowReserved, true)) as $encodedValue) {
                    $queryParameters[] = $encodedValue;
                }
                continue;
            }
            // Unset optional parameters resolve to null, which is sent as an
            // empty value ("?foo=") rather than being dropped: this keeps the
            // emitted query string stable regardless of whether an optional
            // parameter was provided. Parameters declaring an OpenAPI query
            // style skip this mapping (see the $styles branch above).
            $value = $value ?? '';
            $allowReservedKey = \in_array($key, $allowReserved, true);
            $queryParameters[] = $this->encodeValue($key, $value, $allowReservedKey);
        }
        return implode('&', $queryParameters);
    }
    public function getHeaders(array $baseHeaders = []): array
    {
        $headersResolver = $this->getHeadersOptionsResolver();
        $definedOptions = $headersResolver->getDefinedOptions();
        $headerParameters = [];
        foreach ($this->headerParameters as $name => $value) {
            foreach ($definedOptions as $definedOption) {
                if (strcasecmp((string) $name, $definedOption) === 0) {
                    $name = $definedOption;
                    break;
                }
            }
            $headerParameters[$name] = $value;
        }
        return array_merge($this->getExtraHeaders(), $baseHeaders, $headersResolver->resolve($headerParameters));
    }
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getQueryAllowReserved(): array
    {
        return [];
    }
    /**
     * Declares the OpenAPI serialization style of query parameters.
     *
     * Keys are query parameter names, values follow the shape
     * ['style' => string, 'explode' => bool]. Parameters with an
     * explicit `content` must not be declared here: content based
     * serialization takes precedence over styles.
     *
     * @return array<string, array{style?: string, explode?: bool}>
     */
    protected function getQueryStyles(): array
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
    protected function getMultipartBody(?StreamFactoryInterface $streamFactory = null): array
    {
        $bodyBuilder = new MultipartStreamBuilder($streamFactory);
        $formParameters = $this->getFormOptionsResolver()->resolve($this->formParameters);
        foreach ($formParameters as $key => $value) {
            $bodyBuilder->addResource($key, $value);
        }
        return [['Content-Type' => ['multipart/form-data; boundary="' . $bodyBuilder->getBoundary() . '"']], $bodyBuilder->build()];
    }
    protected function getFormOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
    protected function getSerializedBody(SerializerInterface $serializer): array
    {
        return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
    }
    protected function getSerializedObjectBody(SerializerInterface $serializer): array
    {
        return [['Content-Type' => ['application/json']], JsonPayload::encode($serializer, $this->body)];
    }
    private function encodeValue(string $key, mixed $value, bool $allowReserved): string
    {
        return match (true) {
            is_int($value) => $this->encodeIntValue($key, $value, $allowReserved),
            is_bool($value) => $this->encodeIntValue($key, (int) $value, $allowReserved),
            is_string($value) => $this->encodeStringValue($key, $value, $allowReserved),
            is_float($value) => $this->encodeStringValue($key, (string) $value, $allowReserved),
            is_array($value) => $this->encodeArrayValue($key, $value, $allowReserved),
            default => throw new \InvalidArgumentException(sprintf('Query value for key %s must be either int|string|float|array|bool, %s given', $key, gettype($value))),
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
    /**
     * @param array{style?: string, explode?: bool} $styleConfig
     *
     * @return string[]
     */
    private function encodeStyledValue(string $name, mixed $value, array $styleConfig, bool $allowReserved): array
    {
        $style = $styleConfig['style'] ?? 'form';
        $explode = $styleConfig['explode'] ?? false;
        return match ($style) {
            'form' => $this->encodeFormStyle($name, $value, $explode, $allowReserved),
            'spaceDelimited' => $this->encodeDelimitedStyle($name, $value, 'spaceDelimited', $allowReserved),
            'pipeDelimited' => $this->encodeDelimitedStyle($name, $value, 'pipeDelimited', $allowReserved),
            'deepObject' => $this->encodeDeepObjectStyle($name, $value, $allowReserved),
            default => throw new \InvalidArgumentException(sprintf('Unsupported query parameter style "%s" for parameter "%s".', $style, $name)),
        };
    }
    /**
     * @return string[]
     */
    private function encodeFormStyle(string $name, mixed $value, bool $explode, bool $allowReserved): array
    {
        if (!\is_array($value)) {
            return [$this->encodeValue($name, $value, $allowReserved)];
        }
        if ([] === $value) {
            return [];
        }
        if (!$explode) {
            return [$this->implodeStyledValues($name, $value, 'form', $allowReserved)];
        }
        $pairs = [];
        if (\array_is_list($value)) {
            // Exploded arrays repeat the parameter name for each item.
            foreach ($value as $index => $item) {
                if (\is_array($item)) {
                    // Nested levels use bracket notation.
                    $pairs = array_merge($pairs, $this->flattenBracketPairs($name . '[' . rawurlencode((string) $index) . ']', $item, $allowReserved));
                    continue;
                }
                if (null === $item) {
                    continue;
                }
                $pairs[] = $this->encodeValue($name, $item, $allowReserved);
            }
            return $pairs;
        }
        // Exploded objects drop the parent key: each property becomes a top level pair.
        foreach ($value as $subKey => $subValue) {
            if (\is_array($subValue)) {
                $pairs = array_merge($pairs, $this->flattenBracketPairs(rawurlencode((string) $subKey), $subValue, $allowReserved));
                continue;
            }
            if (null === $subValue) {
                continue;
            }
            $pairs[] = $this->encodeValue((string) $subKey, $subValue, $allowReserved);
        }
        return $pairs;
    }
    /**
     * @return string[]
     */
    private function encodeDelimitedStyle(string $name, mixed $value, string $style, bool $allowReserved): array
    {
        if (!\is_array($value)) {
            return [$this->encodeValue($name, $value, $allowReserved)];
        }
        if ([] === $value) {
            return [];
        }
        return [$this->implodeStyledValues($name, $value, $style, $allowReserved)];
    }
    /**
     * @return string[]
     */
    private function encodeDeepObjectStyle(string $name, mixed $value, bool $allowReserved): array
    {
        if (!\is_array($value)) {
            return [$this->encodeValue($name, $value, $allowReserved)];
        }
        if ([] === $value) {
            return [];
        }
        // deepObject uses bracket notation at every level, including the first one.
        return $this->flattenBracketPairs($name, $value, $allowReserved);
    }
    /**
     * Flattens nested values using PHP bracket notation with explicit indices
     * (e.g. `filter[from]=a` or `tags[0]=b`).
     *
     * @return string[]
     */
    private function flattenBracketPairs(string $prefix, mixed $value, bool $allowReserved): array
    {
        if (!\is_array($value)) {
            if (null === $value) {
                return [];
            }
            return [$this->encodeValue($prefix, $value, $allowReserved)];
        }
        $pairs = [];
        foreach ($value as $subKey => $subValue) {
            $pairs = array_merge($pairs, $this->flattenBracketPairs($prefix . '[' . rawurlencode((string) $subKey) . ']', $subValue, $allowReserved));
        }
        return $pairs;
    }
    private function implodeStyledValues(string $name, array $value, string $style, bool $allowReserved): string
    {
        // Delimiters stay literal (except spaces), values are percent encoded: this matches the OpenAPI examples.
        $separator = match ($style) {
            'spaceDelimited' => '%20',
            'pipeDelimited' => '|',
            default => ',',
        };
        $isList = \array_is_list($value);
        $parts = [];
        foreach ($value as $subKey => $subValue) {
            if (\is_array($subValue)) {
                throw new \InvalidArgumentException(sprintf('Query parameter "%s" only supports flat values with style "%s", nested arrays or objects are not supported.', $name, $style));
            }
            if (null === $subValue) {
                continue;
            }
            if (!$isList) {
                // Non exploded objects interleave keys and values.
                $parts[] = rawurlencode((string) $subKey);
            }
            $parts[] = $allowReserved ? $this->stringifyScalar($subValue) : rawurlencode($this->stringifyScalar($subValue));
        }
        return sprintf('%s=%s', rawurlencode($name), implode($separator, $parts));
    }
    private function stringifyScalar(mixed $value): string
    {
        return match (true) {
            \is_bool($value) => (string) (int) $value,
            \is_int($value), \is_float($value), \is_string($value) => (string) $value,
            default => throw new \InvalidArgumentException(sprintf('Query value must be either int|string|float|bool|array|null, %s given', gettype($value))),
        };
    }
}