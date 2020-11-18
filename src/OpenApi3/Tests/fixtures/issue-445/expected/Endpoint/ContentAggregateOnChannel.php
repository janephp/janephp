<?php

namespace PicturePark\API\Endpoint;

class ContentAggregateOnChannel extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Aggregates content by content fields values as specified in the aggregators saved on a channel.
     *
     * @param \PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\ContentAggregationOnChannelRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/Contents/aggregateOnChannel';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentAggregationOnChannelRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelBadRequestException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelNotFoundException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelConflictException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentAggregateOnChannelInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ObjectAggregationResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\ObjectAggregationResult', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentAggregateOnChannelInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}