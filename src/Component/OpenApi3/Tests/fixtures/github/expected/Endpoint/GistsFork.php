<?php

namespace Github\Endpoint;

class GistsFork extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $gist_id;
    /**
     * **Note**: This was previously `/gists/:gist_id/fork`.
     *
     * @param string $gistId gist_id parameter
     */
    public function __construct(string $gistId)
    {
        $this->gist_id = $gistId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{gist_id}'], [$this->gist_id], '/gists/{gist_id}/forks');
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
     * @throws \Github\Exception\GistsForkNotFoundException
     * @throws \Github\Exception\GistsForkUnprocessableEntityException
     * @throws \Github\Exception\GistsForkForbiddenException
     *
     * @return null|\Github\Model\BaseGist
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\BaseGist', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GistsForkNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GistsForkUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GistsForkForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}