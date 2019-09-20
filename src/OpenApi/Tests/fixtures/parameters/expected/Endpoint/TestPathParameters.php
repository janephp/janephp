<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class TestPathParameters extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $testString;
    protected $testInteger;
    protected $testFloat;
    /**
     * 
     *
     * @param string $testString 
     * @param int $testInteger 
     * @param float $testFloat 
     */
    public function __construct(string $testString, int $testInteger, float $testFloat)
    {
        $this->testString = $testString;
        $this->testInteger = $testInteger;
        $this->testFloat = $testFloat;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{testString}', '{testInteger}', '{testFloat}'), array($this->testString, $this->testInteger, $this->testFloat), '/test-path/{testString}/{testInteger}/{testFloat}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
    }
}