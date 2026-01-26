<?php

namespace Github\Endpoint;

class ReposListForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $username;
    /**
     * Lists public repositories for the specified user.
     * @param string $username
     * @param array{
     *    "type"?: string, //Can be one of `all`, `owner`, `member`.
     *    "sort"?: string, //Can be one of `created`, `updated`, `pushed`, `full_name`.
     *    "direction"?: string, //Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`
     *    "per_page"?: int, //Results per page (max 100)
     *    "page"?: int, //Page number of the results to fetch.
     * } $queryParameters
     */
    public function __construct(string $username, array $queryParameters = [])
    {
        $this->username = $username;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{username}'], [$this->username], '/users/{username}/repos');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['type', 'sort', 'direction', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['type' => 'owner', 'sort' => 'full_name', 'per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('direction', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\MinimalRepository[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\Model\MinimalRepository[]', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}