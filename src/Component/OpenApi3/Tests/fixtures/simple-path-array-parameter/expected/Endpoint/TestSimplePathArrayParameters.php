<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class TestSimplePathArrayParameters extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $string;
    protected $array;
    protected $stringRef;
    protected $arrayRef;
    /**
     * 
     *
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
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{string}', '{array}', '{stringRef}', '{arrayRef}'], [$this->string, implode(',', $this->array), $this->stringRef, implode(',', $this->arrayRef)], '/test-simple-path-array-parameters/{string}/{array}/{stringRef}/{arrayRef}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}