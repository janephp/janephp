<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class FindTweetsById extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Returns a variety of information about the Tweet specified by the requested ID
     *
     * @param array $queryParameters {
     *     @var array $ids A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
     *     @var string $format Format for all the objects returned as part of the response, including expansions.
     *     @var string $tweet.format Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *     @var string $user.format Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *     @var string $place.format Format for all place objects returned in response.
     *     @var array $expansions A comma separated list of fields to expand.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(array $queryParameters = array(), array $accept = array())
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/labs/1/tweets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/problem+json'));
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ids', 'format', 'tweet.format', 'user.format', 'place.format', 'expansions'));
        $optionsResolver->setRequired(array('ids'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('ids', array('array'));
        $optionsResolver->addAllowedTypes('format', array('string'));
        $optionsResolver->addAllowedTypes('tweet.format', array('string'));
        $optionsResolver->addAllowedTypes('user.format', array('string'));
        $optionsResolver->addAllowedTypes('place.format', array('string'));
        $optionsResolver->addAllowedTypes('expansions', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\TweetLookupResponse|mixed
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode((string) $body);
        }
        if (mb_strpos($contentType, 'application/problem+json') !== false) {
            return json_decode((string) $body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}