<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class GetUsers extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    /**
     * Foo bar
     *
     * @param array $queryParameters {
     *     @var string $userState User state
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/users';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['userState']);
        $optionsResolver->setRequired(['userState']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('userState', ['string']);
        return $optionsResolver;
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
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}