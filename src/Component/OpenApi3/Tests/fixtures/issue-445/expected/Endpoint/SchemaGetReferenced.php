<?php

namespace PicturePark\API\Endpoint;

class SchemaGetReferenced extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Can fetch referencing schemas for 100 schemas at most.
     *
     * @param string $id The schema ID.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/Schemas/{id}/referenced');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaGetReferencedBadRequestException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedNotFoundException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedConflictException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaGetReferencedInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaDetail[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\SchemaDetail[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaGetReferencedInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}