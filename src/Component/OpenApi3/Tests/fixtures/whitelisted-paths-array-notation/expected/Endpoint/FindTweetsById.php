<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class FindTweetsById extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Returns a variety of information about the Tweet specified by the requested ID
     * @param array{
     *    "ids": array, //A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
     *    "format"?: string, //Format for all the objects returned as part of the response, including expansions.
     *    "tweet.format"?: string, //Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *    "user.format"?: string, //Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *    "place.format"?: string, //Format for all place objects returned in response.
     *    "expansions"?: array, //A comma separated list of fields to expand.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/labs/1/tweets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ids', 'format', 'tweet.format', 'user.format', 'place.format', 'expansions']);
        $optionsResolver->setRequired(['ids']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('tweet.format', ['string']);
        $optionsResolver->addAllowedTypes('user.format', ['string']);
        $optionsResolver->addAllowedTypes('place.format', ['string']);
        $optionsResolver->addAllowedTypes('expansions', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\TweetLookupResponse|\Jane\OpenApi3\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\Model\TweetLookupResponse', 'json');
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\OpenApi3\Tests\Expected\Model\Error', 'json');
        }
        if (mb_strpos(strtolower($contentType), 'application/problem+json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}