<?php

namespace Github\Endpoint;

class UsersGetContextForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $username;
    /**
    * Provides hovercard information when authenticated through basic auth or OAuth with the `repo` scope. You can find out more about someone in relation to their pull requests, issues, repositories, and organizations.
    
    The `subject_type` and `subject_id` parameters provide context for the person's hovercard, which returns more information than without the parameters. For example, if you wanted to find out more about `octocat` who owns the `Spoon-Knife` repository via cURL, it would look like this:
    
    ```shell
    curl -u username:token
     https://api.github.com/users/octocat/hovercard?subject_type=repository&subject_id=1300192
    ```
    *
    * @param string $username 
    * @param array $queryParameters {
    *     @var string $subject_type Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`.
    *     @var string $subject_id Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`.
    * }
    */
    public function __construct(string $username, array $queryParameters = [])
    {
        $this->username = $username;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{username}'], [$this->username], '/users/{username}/hovercard');
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
        $optionsResolver->setDefined(['subject_type', 'subject_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('subject_type', ['string']);
        $optionsResolver->addAllowedTypes('subject_id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\UsersGetContextForUserNotFoundException
     * @throws \Github\Exception\UsersGetContextForUserUnprocessableEntityException
     *
     * @return null|\Github\Model\Hovercard
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Hovercard', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersGetContextForUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\UsersGetContextForUserUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}