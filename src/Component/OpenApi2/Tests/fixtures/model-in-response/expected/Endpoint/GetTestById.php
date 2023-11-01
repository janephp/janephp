<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Endpoint;

class GetTestById extends \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\Component\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/test/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException
     * @throws \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException
     *
     * @return null|\Jane\Component\OpenApi2\Tests\Expected\Model\TestIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\TestIdGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdBadRequestException($serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Jane\Component\OpenApi2\Tests\Expected\Exception\GetTestByIdNotFoundException($serializer->deserialize($body, 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}