<?php

namespace Jane\OpenApi\Tests\Expected\Endpoint;

class FindPrivateTweetMetricsById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns various metrics about a Tweet, including metrics for an embedded Video if one exists
     *
     * @param array $queryParameters {
     *     @var array $ids A comma separated list of Tweet IDs. Up to 50 are allowed in a single request.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/labs/1/tweets/metrics/private';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ids'));
        $optionsResolver->setRequired(array('ids'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('ids', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi\Tests\Expected\Model\TweetMetricsResponse|\Jane\OpenApi\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetMetricsResponse', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
        }
    }
}