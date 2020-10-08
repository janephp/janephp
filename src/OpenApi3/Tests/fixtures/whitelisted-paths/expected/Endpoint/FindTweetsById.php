<?php

namespace Jane\OpenApi3\Tests\Expected\Endpoint;

class FindTweetsById extends \Jane\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
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
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
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
    public function getQueryString() : string
    {
        $optionsResolved = $this->getQueryOptionsResolver()->resolve($this->queryParameters);
        $optionsResolved = array_map(static function ($value) {
            return null !== $value ? $value : '';
        }, $optionsResolved);
        return ltrim((new \Rize\UriTemplate\UriTemplate())->expand('{?ids,format,tweet.format,user.format,place.format,expansions}', $optionsResolved), '?');
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ids', 'format', 'tweet.format', 'user.format', 'place.format', 'expansions'));
        $optionsResolver->setRequired(array('ids'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('ids', array('array'));
        $optionsResolver->setAllowedTypes('format', array('string'));
        $optionsResolver->setAllowedTypes('tweet.format', array('string'));
        $optionsResolver->setAllowedTypes('user.format', array('string'));
        $optionsResolver->setAllowedTypes('place.format', array('string'));
        $optionsResolver->setAllowedTypes('expansions', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi3\Tests\Expected\Model\TweetLookupResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}