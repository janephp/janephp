<?php

namespace Github\Endpoint;

class ReposGetReadme extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * Gets the preferred README for a repository.
    
    READMEs support [custom media types](https://developer.github.com/v3/repos/contents/#custom-media-types) for retrieving the raw content or rendered HTML.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $ref The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)
    * }
    */
    public function __construct(string $owner, string $repo, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/readme');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('ref'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('ref', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposGetReadmeNotFoundException
     * @throws \Github\Exception\ReposGetReadmeUnprocessableEntityException
     *
     * @return null|\Github\Model\ContentFile
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ContentFile', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetReadmeNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetReadmeUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}