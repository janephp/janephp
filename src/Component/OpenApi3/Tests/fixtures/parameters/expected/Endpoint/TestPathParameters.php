<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters\Endpoint;

class TestPathParameters extends \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\Endpoint
{
    protected $testString;
    protected $testInteger;
    protected $testFloat;
    /**
     * @param string $testString
     * @param int $testInteger
     * @param int $testFloat
     */
    public function __construct(string $testString, int $testInteger, int $testFloat)
    {
        $this->testString = $testString;
        $this->testInteger = $testInteger;
        $this->testFloat = $testFloat;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{testString}', '{testInteger}', '{testFloat}'], [rawurlencode($this->testString), rawurlencode($this->testInteger), rawurlencode($this->testFloat)], '/test-path/{testString}/{testInteger}/{testFloat}');
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
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}