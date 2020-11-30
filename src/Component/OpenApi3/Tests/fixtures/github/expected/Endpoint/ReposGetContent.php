<?php

namespace Github\Endpoint;

class ReposGetContent extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $path;
    /**
    * Gets the contents of a file or directory in a repository. Specify the file path or directory in `:path`. If you omit
    `:path`, you will receive the contents of all files in the repository.
    
    Files and symlinks support [a custom media type](https://developer.github.com/v3/repos/contents/#custom-media-types) for
    retrieving the raw content or rendered HTML (when supported). All content types support [a custom media
    type](https://developer.github.com/v3/repos/contents/#custom-media-types) to ensure the content is returned in a consistent
    object format.
    
    **Note**:
    *   To get a repository's contents recursively, you can [recursively get the tree](https://developer.github.com/v3/git/trees/).
    *   This API has an upper limit of 1,000 files for a directory. If you need to retrieve more files, use the [Git Trees
    API](https://developer.github.com/v3/git/trees/#get-a-tree).
    *   This API supports files up to 1 megabyte in size.
    
    #### If the content is a directory
    The response will be an array of objects, one object for each item in the directory.
    When listing the contents of a directory, submodules have their "type" specified as "file". Logically, the value
    _should_ be "submodule". This behavior exists in API v3 [for backwards compatibility purposes](https://git.io/v1YCW).
    In the next major version of the API, the type will be returned as "submodule".
    
    #### If the content is a symlink 
    If the requested `:path` points to a symlink, and the symlink's target is a normal file in the repository, then the
    API responds with the content of the file (in the format shown in the example. Otherwise, the API responds with an object 
    describing the symlink itself.
    
    #### If the content is a submodule
    The `submodule_git_url` identifies the location of the submodule repository, and the `sha` identifies a specific
    commit within the submodule repository. Git uses the given URL when cloning the submodule repository, and checks out
    the submodule at that specific commit.
    
    If the submodule repository is not hosted on github.com, the Git URLs (`git_url` and `_links["git"]`) and the
    github.com URLs (`html_url` and `_links["html"]`) will have null values.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $path path+ parameter
    * @param array $queryParameters {
    *     @var string $ref The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)
    * }
    */
    public function __construct(string $owner, string $repo, string $path, array $queryParameters = array())
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->path = $path;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{path}'), array($this->owner, $this->repo, $this->path), '/repos/{owner}/{repo}/contents/{path}');
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
     * @throws \Github\Exception\ReposGetContentNotFoundException
     * @throws \Github\Exception\ReposGetContentForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposGetContentNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ReposGetContentForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (302 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}