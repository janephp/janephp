<?php

namespace Github\Endpoint;

class ReposListReleases extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * This returns a list of releases, which does not include regular Git tags that have not been associated with a release. To get a list of Git tags, use the [Repository Tags API](https://developer.github.com/v3/repos/#list-repository-tags).
    
    Information about published releases are available to everyone. Only users with push access will receive listings for draft releases.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(string $owner, string $repo, array $queryParameters = [])
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/releases');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposListReleasesNotFoundException
     *
     * @return null|\Github\Model\Release[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Release[]', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposListReleasesNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}