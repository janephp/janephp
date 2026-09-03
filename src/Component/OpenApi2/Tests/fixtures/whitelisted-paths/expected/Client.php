<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths;

class Client extends \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\Client
{
    /**
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Company|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    public function retrieveCompany()
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint\RetrieveCompany());
    }
    /**
     * Updates the company setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a company object and a 200 OK response code if the call succeeded.
     * @param \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody $payload json payload
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Company|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    public function updateCompany(\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody $payload)
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint\UpdateCompany($payload));
    }
    /**
     * Returns a list of your projects. The projects are returned sorted by creation date, with the most recently created projects appearing first.
     *
     * The response contains an object with a projects property that contains an array of up to per_page projects. Each entry in the array is a separate project object. If no more projects are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your projects.
     * @param array $queryParameters {
     *     @var bool $is_active Pass true to only return active projects and false to return inactive projects.
     *     @var int $client_id Only return projects belonging to the client with the given ID.
     *     @var string $updated_since Only return projects that have been updated since the given date and time.
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
     * }
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Projects|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    public function listProjects(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint\ListProjects($queryParameters));
    }
    /**
     * Creates a new project object. Returns a project object and a 201 Created response code if the call succeeded.
     * @param \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectsPostBody $payload json payload
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Project|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    public function createProject(\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectsPostBody $payload)
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint\CreateProject($payload));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://api.harvestapp.com/v2');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}