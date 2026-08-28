<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Generator\Runtime\data\Client;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

// Stub runtime classes needed for the test (previously loaded from data template files)
if (!interface_exists('Endpoint', false)) {
    eval('use Psr\Http\Message\ResponseInterface;
    use Symfony\Component\Serializer\SerializerInterface;
    interface Endpoint {
        public function getBody(SerializerInterface $serializer, $streamFactory = null): array;
        public function getQueryString(): string;
        public function getUri(): string;
        public function getMethod(): string;
        public function getHeaders(array $baseHeaders = []): array;
        public function getAuthenticationScopes(): array;
        public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = \Client::FETCH_OBJECT);
    }');
}
if (!class_exists('BaseEndpoint', false)) {
    eval('use Psr\Http\Message\ResponseInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Serializer\SerializerInterface;
    abstract class BaseEndpoint implements Endpoint {
        protected array $formParameters = [];
        protected array $queryParameters = [];
        protected array $headerParameters = [];
        protected mixed $body;
        abstract public function getMethod(): string;
        abstract public function getBody(SerializerInterface $serializer, $streamFactory = null): array;
        abstract public function getUri(): string;
        abstract public function getAuthenticationScopes(): array;
        abstract protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null);
        protected function getExtraHeaders(): array { return []; }
        public function getQueryString(): string {
            $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
            $styles = $this->getQueryStyles();
            $allowReserved = $this->getQueryAllowReserved();
            $queryParameters = [];
            foreach ($optionsResolved as $key => $value) {
                if (array_key_exists($key, $styles)) {
                    if (null === $value) { continue; }
                    foreach ($this->encodeStyledValue($key, $value, $styles[$key], in_array($key, $allowReserved, true)) as $encodedValue) {
                        $queryParameters[] = $encodedValue;
                    }
                    continue;
                }
                $value = $value ?? "";
                $allowReservedKey = in_array($key, $allowReserved, true);
                $queryParameters[] = $this->encodeValue($key, $value, $allowReservedKey);
            }
            return implode("&", $queryParameters);
        }
        public function getHeaders(array $baseHeaders = []): array {
            $headersResolver = $this->getHeadersOptionsResolver();
            $definedOptions = $headersResolver->getDefinedOptions();
            $headerParameters = [];
            foreach ($this->headerParameters as $name => $value) {
                foreach ($definedOptions as $definedOption) {
                    if (strcasecmp((string) $name, $definedOption) === 0) { $name = $definedOption; break; }
                }
                $headerParameters[$name] = $value;
            }
            return array_merge($this->getExtraHeaders(), $baseHeaders, $headersResolver->resolve($headerParameters));
        }
        protected function getQueryOptionsResolver(): OptionsResolver { return new OptionsResolver(); }
        protected function getQueryAllowReserved(): array { return []; }
        protected function getQueryStyles(): array { return []; }
        protected function getHeadersOptionsResolver(): OptionsResolver { return new OptionsResolver(); }
        protected function getFormBody(): array { return [["Content-Type" => ["application/x-www-form-urlencoded"]], http_build_query($this->getFormOptionsResolver()->resolve($this->formParameters))]; }
        protected function getMultipartBody($streamFactory = null): array { return [[], ""]; }
        protected function getFormOptionsResolver(): OptionsResolver { return new OptionsResolver(); }
        protected function getSerializedBody(SerializerInterface $serializer): array { return [["Content-Type" => ["application/json"]], $serializer->serialize($this->body, "json")]; }
        protected function getSerializedObjectBody(SerializerInterface $serializer): array { return [["Content-Type" => ["application/json"]], ""]; }
        private function encodeValue(string $key, mixed $value, bool $allowReserved): string {
            return match (true) {
                is_int($value) => $this->encodeIntValue($key, $value, $allowReserved),
                is_bool($value) => $this->encodeIntValue($key, (int) $value, $allowReserved),
                is_string($value) => $this->encodeStringValue($key, $value, $allowReserved),
                is_float($value) => $this->encodeStringValue($key, (string) $value, $allowReserved),
                is_array($value) => $this->encodeArrayValue($key, $value, $allowReserved),
                default => throw new \InvalidArgumentException(sprintf("Query value for key %s must be either int|string|float|array|bool, %s given", $key, gettype($value))),
            };
        }
        private function encodeIntValue(string $queryParamName, int $value, bool $allowReserved): string {
            $queryParamName = rawurlencode($queryParamName);
            return sprintf("%s=%s", $queryParamName, $allowReserved ? $value : rawurlencode((string) $value));
        }
        private function encodeStringValue(string $queryParamName, string $value, bool $allowReserved): string {
            $queryParamName = rawurlencode($queryParamName);
            return sprintf("%s=%s", $queryParamName, $allowReserved ? $value : rawurlencode($value));
        }
        private function encodeArrayValue(string $queryParamName, array $value, bool $allowReserved): string {
            $params = [];
            foreach ($value as $subKey => $subValue) {
                $arrayKey = $queryParamName . "[" . rawurlencode((string) $subKey) . "]";
                $params[] = $this->encodeValue($arrayKey, $subValue, $allowReserved);
            }
            return implode("&", $params);
        }
        private function encodeStyledValue(string $name, mixed $value, array $styleConfig, bool $allowReserved): array {
            $style = $styleConfig["style"] ?? "form";
            $explode = $styleConfig["explode"] ?? false;
            return match ($style) {
                "form" => $this->encodeFormStyle($name, $value, $explode, $allowReserved),
                "spaceDelimited" => $this->encodeDelimitedStyle($name, $value, "spaceDelimited", $allowReserved),
                "pipeDelimited" => $this->encodeDelimitedStyle($name, $value, "pipeDelimited", $allowReserved),
                "deepObject" => $this->encodeDeepObjectStyle($name, $value, $allowReserved),
                default => throw new \InvalidArgumentException(sprintf("Unsupported query parameter style \"%s\" for parameter \"%s\".", $style, $name)),
            };
        }
        private function encodeFormStyle(string $name, mixed $value, bool $explode, bool $allowReserved): array {
            if (!is_array($value)) { return [$this->encodeValue($name, $value, $allowReserved)]; }
            if ([] === $value) { return []; }
            if (!$explode) { return [$this->implodeStyledValues($name, $value, "form", $allowReserved)]; }
            $pairs = [];
            if (array_is_list($value)) {
                foreach ($value as $index => $item) {
                    if (is_array($item)) { $pairs = array_merge($pairs, $this->flattenBracketPairs($name . "[" . rawurlencode((string) $index) . "]", $item, $allowReserved)); continue; }
                    if (null === $item) { continue; }
                    $pairs[] = $this->encodeValue($name, $item, $allowReserved);
                }
                return $pairs;
            }
            foreach ($value as $subKey => $subValue) {
                if (is_array($subValue)) { $pairs = array_merge($pairs, $this->flattenBracketPairs(rawurlencode((string) $subKey), $subValue, $allowReserved)); continue; }
                if (null === $subValue) { continue; }
                $pairs[] = $this->encodeValue((string) $subKey, $subValue, $allowReserved);
            }
            return $pairs;
        }
        private function encodeDelimitedStyle(string $name, mixed $value, string $style, bool $allowReserved): array {
            if (!is_array($value)) { return [$this->encodeValue($name, $value, $allowReserved)]; }
            if ([] === $value) { return []; }
            return [$this->implodeStyledValues($name, $value, $style, $allowReserved)];
        }
        private function encodeDeepObjectStyle(string $name, mixed $value, bool $allowReserved): array {
            if (!is_array($value)) { return [$this->encodeValue($name, $value, $allowReserved)]; }
            if ([] === $value) { return []; }
            return $this->flattenBracketPairs($name, $value, $allowReserved);
        }
        private function flattenBracketPairs(string $prefix, mixed $value, bool $allowReserved): array {
            if (!is_array($value)) { if (null === $value) { return []; } return [$this->encodeValue($prefix, $value, $allowReserved)]; }
            $pairs = [];
            foreach ($value as $subKey => $subValue) { $pairs = array_merge($pairs, $this->flattenBracketPairs($prefix . "[" . rawurlencode((string) $subKey) . "]", $subValue, $allowReserved)); }
            return $pairs;
        }
        private function implodeStyledValues(string $name, array $value, string $style, bool $allowReserved): string {
            $separator = match ($style) { "spaceDelimited" => "%20", "pipeDelimited" => "|", default => "," };
            $isList = array_is_list($value);
            $parts = [];
            foreach ($value as $subKey => $subValue) {
                if (is_array($subValue)) { throw new \InvalidArgumentException(sprintf("Query parameter \"%s\" only supports flat values with style \"%s\", nested arrays or objects are not supported.", $name, $style)); }
                if (null === $subValue) { continue; }
                if (!$isList) { $parts[] = rawurlencode((string) $subKey); }
                $parts[] = $allowReserved ? $this->stringifyScalar($subValue) : rawurlencode($this->stringifyScalar($subValue));
            }
            return sprintf("%s=%s", rawurlencode($name), implode($separator, $parts));
        }
        private function stringifyScalar(mixed $value): string {
            return match (true) {
                is_bool($value) => (string) (int) $value,
                is_int($value), is_float($value), is_string($value) => (string) $value,
                default => throw new \InvalidArgumentException(sprintf("Query value must be either int|string|float|bool|array|null, %s given", gettype($value))),
            };
        }
    }');
}
if (!class_exists('Client', false)) {
    eval('abstract class Client { const FETCH_OBJECT = "object"; const FETCH_RESPONSE = "response"; }');
}

final class BaseEndpointTest extends TestCase
{
    public static function queryParamsProvider(): iterable
    {
        yield 'string' => [['queryParam' => 'test'], 'queryParam=test'];
        yield 'string with reserved character' => [['queryParam' => 'te?st'], 'queryParam=te%3Fst'];
        yield 'int' => [['queryParam' => 1], 'queryParam=1'];
        yield 'bool' => [['queryParam' => false], 'queryParam=0'];
        yield 'multiple params' => [['queryParam' => 'test', 'anotherParam' => 'test2'], 'queryParam=test&anotherParam=test2'];
        yield 'string array' => [['queryParam' => ['test1', 'test2']], 'queryParam%5B0%5D=test1&queryParam%5B1%5D=test2'];
        yield 'int array' => [['queryParam' => [1, 2, 3]], 'queryParam%5B0%5D=1&queryParam%5B1%5D=2&queryParam%5B2%5D=3'];
        yield 'array with string keys' => [['queryParam' => ['key' => 1]], 'queryParam%5Bkey%5D=1'];
        yield 'nested array' => [['queryParam' => ['key' => ['test' => 'test1']]], 'queryParam%5Bkey%5D%5Btest%5D=test1'];
    }

    public static function queryParamsProviderWithAllowingReservedCharacters(): iterable
    {
        yield 'string' => [['queryParam' => 'te?st'], ['queryParam'], 'queryParam=te?st'];
        yield 'array' => [['queryParam' => ['te?st', 'tes*&']], ['queryParam'], 'queryParam%5B0%5D=te?st&queryParam%5B1%5D=tes*&'];
    }

    public static function styledQueryParamsProvider(): iterable
    {
        $form = ['style' => 'form'];
        yield 'form exploded object drops parent key' => [
            ['search' => ['name' => 'john', 'country' => 'SE']],
            ['search' => ['style' => 'form', 'explode' => true]],
            'name=john&country=SE',
        ];
        yield 'form exploded array repeats parameter name' => [
            ['param' => ['a', 'b']],
            ['param' => ['style' => 'form', 'explode' => true]],
            'param=a&param=b',
        ];
        yield 'form exploded object with nested array uses bracket notation' => [
            ['search' => ['name' => 'john', 'tags' => ['a', 'b']]],
            ['search' => ['style' => 'form', 'explode' => true]],
            'name=john&tags%5B0%5D=a&tags%5B1%5D=b',
        ];
        yield 'form exploded object with nested object uses bracket notation' => [
            ['search' => ['name' => 'john', 'address' => ['city' => 'NY']]],
            ['search' => ['style' => 'form', 'explode' => true]],
            'name=john&address%5Bcity%5D=NY',
        ];
        yield 'form exploded array of objects uses bracket notation' => [
            ['points' => [['x' => 1], ['x' => 2]]],
            ['points' => ['style' => 'form', 'explode' => true]],
            'points%5B0%5D%5Bx%5D=1&points%5B1%5D%5Bx%5D=2',
        ];
        yield 'form non exploded array is comma separated' => [
            ['color' => ['blue', 'black']],
            ['color' => ['style' => 'form', 'explode' => false]],
            'color=blue,black',
        ];
        yield 'form non exploded object interleaves keys and values' => [
            ['color' => ['R' => '100', 'G' => '200']],
            ['color' => ['style' => 'form', 'explode' => false]],
            'color=R,100,G,200',
        ];
        yield 'space delimited array' => [
            ['color' => ['blue', 'black']],
            ['color' => ['style' => 'spaceDelimited', 'explode' => false]],
            'color=blue%20black',
        ];
        yield 'pipe delimited array' => [
            ['color' => ['blue', 'black']],
            ['color' => ['style' => 'pipeDelimited', 'explode' => false]],
            'color=blue|black',
        ];
        yield 'deep object flat' => [
            ['filter' => ['from' => 'a', 'to' => 'b']],
            ['filter' => ['style' => 'deepObject', 'explode' => true]],
            'filter%5Bfrom%5D=a&filter%5Bto%5D=b',
        ];
        yield 'deep object nested' => [
            ['filter' => ['range' => ['from' => 'a']]],
            ['filter' => ['style' => 'deepObject', 'explode' => true]],
            'filter%5Brange%5D%5Bfrom%5D=a',
        ];
        yield 'null value is omitted' => [
            ['search' => null, 'other' => 'kept'],
            ['search' => ['style' => 'form', 'explode' => true]],
            'other=kept',
        ];
        yield 'empty object is omitted' => [
            ['search' => []],
            ['search' => ['style' => 'form', 'explode' => true]],
            '',
        ];
        yield 'exploded scalar values are encoded' => [
            ['search' => ['name' => 'jo hn?']],
            ['search' => ['style' => 'form', 'explode' => true]],
            'name=jo%20hn%3F',
        ];
    }

    public static function styledQueryParamsWithAllowingReservedCharactersProvider(): iterable
    {
        yield 'form exploded reserved characters' => [
            ['search' => ['name' => 'jo?hn&']],
            ['search'],
            ['search' => ['style' => 'form', 'explode' => true]],
            'name=jo?hn&',
        ];
        yield 'pipe delimited reserved characters' => [
            ['color' => ['bl|ue', 'bla*ck']],
            ['color'],
            ['color' => ['style' => 'pipeDelimited', 'explode' => false]],
            'color=bl|ue|bla*ck',
        ];
    }

    public static function invalidStyledQueryParamsProvider(): iterable
    {
        yield 'nested value with space delimited style' => [
            ['color' => [['nested']]],
            ['color' => ['style' => 'spaceDelimited']],
        ];
        yield 'nested value with form non exploded style' => [
            ['color' => [['nested']]],
            ['color' => ['style' => 'form', 'explode' => false]],
        ];
        yield 'unknown style' => [
            ['color' => ['blue']],
            ['color' => ['style' => 'matrix']],
        ];
    }

    /**
     * @dataProvider queryParamsProvider
     */
    public function testQueryParamsWillBeProperlyEncoded(array $queryParams, string $expectedQueryString): void
    {
        $endpoint = $this->getEndpoint($queryParams);

        self::assertEquals($expectedQueryString, $endpoint->getQueryString());
        self::assertEquals(http_build_query($queryParams, encoding_type: \PHP_QUERY_RFC3986), $endpoint->getQueryString());
    }

    /**
     * @dataProvider queryParamsProviderWithAllowingReservedCharacters
     */
    public function testQueryParamsWillBeProperlyEncodedWithReservedCharacters(
        array $queryParams,
        array $allowedQueryParams,
        string $expectedQueryString,
    ): void {
        $endpoint = $this->getEndpoint($queryParams, $allowedQueryParams);

        self::assertEquals($expectedQueryString, $endpoint->getQueryString());
    }

    /**
     * @dataProvider headerParamsProvider
     */
    public function testHeaderParamsWillBeResolvedCaseInsensitively(array $headerParams, array $expectedHeaders): void
    {
        $endpoint = new class($headerParams) extends \BaseEndpoint {
            public function __construct(array $headerParameters)
            {
                $this->headerParameters = $headerParameters;
            }

            public function getMethod(): string
            {
                return 'GET';
            }

            public function getBody(SerializerInterface $serializer, $streamFactory = null): array
            {
                return [[], null];
            }

            public function getUri(): string
            {
                return '/test';
            }

            public function getAuthenticationScopes(): array
            {
                return [];
            }

            protected function transformResponseBody(
                ResponseInterface $response,
                SerializerInterface $serializer,
                ?string $contentType = null,
            ) {
                return null;
            }

            public function parseResponse(
                ResponseInterface $response,
                SerializerInterface $serializer,
                string $fetchMode = \Client::FETCH_OBJECT,
            ) {
                return $response;
            }

            protected function getHeadersOptionsResolver(): OptionsResolver
            {
                return (new OptionsResolver())
                    ->setDefined(['X-USER-ID'])
                    ->setRequired([])
                    ->setDefaults([])
                    ->addAllowedTypes('X-USER-ID', ['string']);
            }
        };

        self::assertEquals($expectedHeaders, $endpoint->getHeaders());
    }

    public static function headerParamsProvider(): iterable
    {
        yield 'same case as definition' => [['X-USER-ID' => '11'], ['X-USER-ID' => '11']];
        yield 'lowercase input' => [['x-user-id' => '11'], ['X-USER-ID' => '11']];
        yield 'mixed case input' => [['X-User-Id' => '11'], ['X-USER-ID' => '11']];
        yield 'no header parameter' => [[], []];
    }

    public function testRequiredHeaderParamCanBePassedWithADifferentCase(): void
    {
        $endpoint = new class(['x-user-id' => '11']) extends \BaseEndpoint {
            public function __construct(array $headerParameters)
            {
                $this->headerParameters = $headerParameters;
            }

            public function getMethod(): string
            {
                return 'GET';
            }

            public function getBody(SerializerInterface $serializer, $streamFactory = null): array
            {
                return [[], null];
            }

            public function getUri(): string
            {
                return '/test';
            }

            public function getAuthenticationScopes(): array
            {
                return [];
            }

            protected function transformResponseBody(
                ResponseInterface $response,
                SerializerInterface $serializer,
                ?string $contentType = null,
            ) {
                return null;
            }

            public function parseResponse(
                ResponseInterface $response,
                SerializerInterface $serializer,
                string $fetchMode = \Client::FETCH_OBJECT,
            ) {
                return $response;
            }

            protected function getHeadersOptionsResolver(): OptionsResolver
            {
                return (new OptionsResolver())
                    ->setDefined(['X-USER-ID'])
                    ->setRequired(['X-USER-ID'])
                    ->setDefaults([])
                    ->addAllowedTypes('X-USER-ID', ['string']);
            }
        };

        self::assertEquals(['X-USER-ID' => '11'], $endpoint->getHeaders());
    }

    public function testUnknownHeaderParamStillThrowsAnException(): void
    {
        $endpoint = new class(['unknown-header' => '11']) extends \BaseEndpoint {
            public function __construct(array $headerParameters)
            {
                $this->headerParameters = $headerParameters;
            }

            public function getMethod(): string
            {
                return 'GET';
            }

            public function getBody(SerializerInterface $serializer, $streamFactory = null): array
            {
                return [[], null];
            }

            public function getUri(): string
            {
                return '/test';
            }

            public function getAuthenticationScopes(): array
            {
                return [];
            }

            protected function transformResponseBody(
                ResponseInterface $response,
                SerializerInterface $serializer,
                ?string $contentType = null,
            ) {
                return null;
            }

            public function parseResponse(
                ResponseInterface $response,
                SerializerInterface $serializer,
                string $fetchMode = \Client::FETCH_OBJECT,
            ) {
                return $response;
            }

            protected function getHeadersOptionsResolver(): OptionsResolver
            {
                return (new OptionsResolver())
                    ->setDefined(['X-USER-ID'])
                    ->setRequired([])
                    ->setDefaults([])
                    ->addAllowedTypes('X-USER-ID', ['string']);
            }
        };

        $this->expectException(UndefinedOptionsException::class);
        $endpoint->getHeaders();
    }

    /**
     * @dataProvider styledQueryParamsProvider
     */
    public function testStyledQueryParamsWillBeProperlyEncoded(array $queryParams, array $styles, string $expectedQueryString): void
    {
        $endpoint = $this->getEndpoint($queryParams, [], $styles);

        self::assertEquals($expectedQueryString, $endpoint->getQueryString());
    }

    /**
     * @dataProvider styledQueryParamsWithAllowingReservedCharactersProvider
     */
    public function testStyledQueryParamsWillBeProperlyEncodedWithReservedCharacters(
        array $queryParams,
        array $allowedQueryParams,
        array $styles,
        string $expectedQueryString,
    ): void {
        $endpoint = $this->getEndpoint($queryParams, $allowedQueryParams, $styles);

        self::assertEquals($expectedQueryString, $endpoint->getQueryString());
    }

    /**
     * @dataProvider invalidStyledQueryParamsProvider
     */
    public function testInvalidStyledQueryParamsThrowException(array $queryParams, array $styles): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $endpoint = $this->getEndpoint($queryParams, [], $styles);
        $endpoint->getQueryString();
    }

    private function getEndpoint(array $queryParams, array $allowReserved = [], array $queryStyles = []): object
    {
        return new class($queryParams, $allowReserved, $queryStyles) extends \BaseEndpoint {
            private array $allowReserved;
            private array $queryStyles;

            public function __construct(array $queryParams, array $allowReserved, array $queryStyles)
            {
                $this->queryParameters = $queryParams;
                $this->allowReserved = $allowReserved;
                $this->queryStyles = $queryStyles;
            }

            public function getMethod(): string
            {
                return 'GET';
            }

            public function getBody(SerializerInterface $serializer, $streamFactory = null): array
            {
                return [[], null];
            }

            public function getUri(): string
            {
                return '/test';
            }

            public function getAuthenticationScopes(): array
            {
                return [];
            }

            protected function transformResponseBody(
                ResponseInterface $response,
                SerializerInterface $serializer,
                ?string $contentType = null,
            ) {
                return null;
            }

            public function parseResponse(
                ResponseInterface $response,
                SerializerInterface $serializer,
                string $fetchMode = \Client::FETCH_OBJECT,
            ) {
                return $response;
            }

            protected function getQueryOptionsResolver(): OptionsResolver
            {
                $optionsResolver = parent::getQueryOptionsResolver();
                $optionsResolver->setDefined(array_keys($this->queryParameters));

                return $optionsResolver;
            }

            protected function getQueryAllowReserved(): array
            {
                return $this->allowReserved;
            }

            protected function getQueryStyles(): array
            {
                return $this->queryStyles;
            }
        };
    }
}
