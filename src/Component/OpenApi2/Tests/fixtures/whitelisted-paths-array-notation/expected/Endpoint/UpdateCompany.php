<?php

namespace Jane\OpenApi2\Tests\Expected\Endpoint;

class UpdateCompany extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * Updates the company setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a company object and a 200 OK response code if the call succeeded.
     *
     * @param \Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody $payload json payload
     */
    public function __construct(\Jane\OpenApi2\Tests\Expected\Model\CompanyPatchBody $payload)
    {
        $this->body = $payload;
    }
    use \Jane\OpenApi2\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return '/company';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Company|\Jane\OpenApi2\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company', 'json');
        }
        return $serializer->deserialize($body, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}