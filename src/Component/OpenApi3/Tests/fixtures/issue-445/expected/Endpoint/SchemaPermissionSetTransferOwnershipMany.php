<?php

namespace PicturePark\API\Endpoint;

class SchemaPermissionSetTransferOwnershipMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Transfers ownership of multiple schema permission sets to respective supplied users.
     * @param \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody
     */
    public function __construct(\PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/v1/SchemaPermissionSets/many/ownership';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \PicturePark\API\Model\PermissionSetOwnershipTransferManyRequest) {
            return [['Content-Type' => ['application/json']], \PicturePark\API\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaPermissionSetTransferOwnershipManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
}