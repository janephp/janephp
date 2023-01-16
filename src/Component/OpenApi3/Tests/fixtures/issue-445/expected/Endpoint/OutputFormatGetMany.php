<?php

namespace PicturePark\API\Endpoint;

class OutputFormatGetMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Gets multiple output format details by the output format IDs. Can fetch maximum of 100 output formats at once.
     *
     * @param array $queryParameters {
     *     @var array $ids Output format IDs to get information about. If this is omitted, all output formats in the system will be returned.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/OutputFormats';
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
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('ids', array('array', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\OutputFormatGetManyBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyConflictException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\OutputFormatDetail[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\OutputFormatDetail[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\RequestSizeLimitExceededException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatGetManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}