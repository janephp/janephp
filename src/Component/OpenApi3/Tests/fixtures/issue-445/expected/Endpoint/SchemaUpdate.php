<?php

namespace PicturePark\API\Endpoint;

class SchemaUpdate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Updates an existing schema.
    Depending on how much the schema is referenced by existing data, the operation can take a lot of time.
    *
    * @param string $id The schema ID.
    * @param \PicturePark\API\Model\SchemaUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    */
    public function __construct(string $id, \PicturePark\API\Model\SchemaUpdateRequest $requestBody, array $queryParameters = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/Schemas/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\SchemaUpdateRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('timeout'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('timeout', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaUpdateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaUpdateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaUpdateConflictException
     * @throws \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaUpdateResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\SchemaUpdateResult', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}