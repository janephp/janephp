<?php

namespace Github\Endpoint;

class ChecksSetSuitesPreferences extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Changes the default automatic flow when creating check suites. By default, a check suite is automatically created each time code is pushed to a repository. When you disable the automatic creation of check suites, you can manually [Create a check suite](https://developer.github.com/v3/checks/suites/#create-a-check-suite). You must have admin permissions in the repository to set preferences for check suites.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/check-suites/preferences');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\CheckSuitePreference
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\CheckSuitePreference', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}