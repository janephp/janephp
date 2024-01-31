<?php

namespace PicturePark\API\Endpoint;

class SchemaFieldExists extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $schemaId;
    protected $fieldId;
    /**
    * Checks if the field in the specified schema already exists.
    Also returns a flag indicating if the field was previously deleted and the ID can therefore not be reused.
    *
    * @param string $schemaId The schema ID.
    * @param string $fieldId The field ID.
    */
    public function __construct(string $schemaId, string $fieldId)
    {
        $this->schemaId = $schemaId;
        $this->fieldId = $fieldId;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{schemaId}', '{fieldId}'], [$this->schemaId, $this->fieldId], '/v1/Schemas/{schemaId}/{fieldId}/exists');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaFieldExistsBadRequestException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsNotFoundException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsConflictException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaFieldExistsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\FieldExistsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\FieldExistsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaFieldExistsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}