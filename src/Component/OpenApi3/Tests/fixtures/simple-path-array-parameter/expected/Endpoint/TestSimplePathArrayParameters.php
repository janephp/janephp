<?php

namespace Jane\Component\OpenApi3\Tests\Expected\SimplePathArrayParameter\Endpoint;

class TestSimplePathArrayParameters extends \Jane\Component\OpenApi3\Tests\Expected\SimplePathArrayParameter\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\SimplePathArrayParameter\Runtime\Client\Endpoint
{
    protected $string;
    protected $array;
    protected $stringRef;
    protected $arrayRef;
    /**
     * @param string $string
     * @param array $array
     * @param string $stringRef
     * @param array $arrayRef
     */
    public function __construct(string $string, array $array, string $stringRef, array $arrayRef)
    {
        $this->string = $string;
        $this->array = $array;
        $this->stringRef = $stringRef;
        $this->arrayRef = $arrayRef;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\SimplePathArrayParameter\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{string}', '{array}', '{stringRef}', '{arrayRef}'], [rawurlencode($this->string), rawurlencode(implode(',', $this->array)), rawurlencode($this->stringRef), rawurlencode(implode(',', $this->arrayRef))], '/test-simple-path-array-parameters/{string}/{array}/{stringRef}/{arrayRef}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}