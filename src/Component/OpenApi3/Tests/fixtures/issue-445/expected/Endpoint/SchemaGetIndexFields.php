<?php

namespace PicturePark\API\Endpoint;

class SchemaGetIndexFields extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Search the indexed fields based on the search request.
    An indexed field object is created for a schema field only if that field has one of the following properties set to true: Index,
    SimpleSearch or Sortable.
    All indexed fields are aggregated and returned as a a single list.
    *
    * @param \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody 
    */
    public function __construct(\PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest $requestBody)
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
        return '/v1/Schemas/indexFields/searchBySchemaIds';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest) {
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
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsConflictException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetIndexFieldsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\IndexField[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\IndexField[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetIndexFieldsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}