<?php

namespace Github\Endpoint;

class AppsCreateFromManifest extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $code;
    /**
     * Use this endpoint to complete the handshake necessary when implementing the [GitHub App Manifest flow](https://developer.github.com/apps/building-github-apps/creating-github-apps-from-a-manifest/). When you create a GitHub App with the manifest flow, you receive a temporary `code` used to retrieve the GitHub App's `id`, `pem` (private key), and `webhook_secret`.
     *
     * @param string $code code parameter
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{code}'], [$this->code], '/app-manifests/{code}/conversions');
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
     * @throws \Github\Exception\AppsCreateFromManifestNotFoundException
     * @throws \Github\Exception\AppsCreateFromManifestUnprocessableEntityException
     *
     * @return null|\Github\Model\AppManifestsCodeConversionsPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\AppManifestsCodeConversionsPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\AppsCreateFromManifestNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\AppsCreateFromManifestUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationErrorSimple', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}