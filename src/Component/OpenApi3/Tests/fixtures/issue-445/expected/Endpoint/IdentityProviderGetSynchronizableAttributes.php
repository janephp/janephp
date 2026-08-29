<?php

namespace PicturePark\API\Endpoint;

class IdentityProviderGetSynchronizableAttributes extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/IdentityProviders/synchronizableAttributes';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException
     * @throws \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException
     *
     * @return null|array
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\IdentityProviderGetSynchronizableAttributesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
}