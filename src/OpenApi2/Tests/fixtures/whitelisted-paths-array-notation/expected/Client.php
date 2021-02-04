<?php

namespace Jane\OpenApi2\Tests\Expected;

class Client extends \Jane\OpenApi2\Tests\Expected\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\Model\Company|\Jane\OpenApi2\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveCompany(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\RetrieveCompany(), $fetch);
    }
    /**
    * Returns a list of your projects. The projects are returned sorted by creation date, with the most recently created projects appearing first.
    
    The response contains an object with a projects property that contains an array of up to per_page projects. Each entry in the array is a separate project object. If no more projects are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your projects.
    *
    * @param array $queryParameters {
    *     @var bool $is_active Pass true to only return active projects and false to return inactive projects.
    *     @var int $client_id Only return projects belonging to the client with the given ID.
    *     @var string $updated_since Only return projects that have been updated since the given date and time.
    *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
    *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Jane\OpenApi2\Tests\Expected\Model\Projects|\Jane\OpenApi2\Tests\Expected\Model\Error|\Psr\Http\Message\ResponseInterface
    */
    public function listProjects(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\OpenApi2\Tests\Expected\Endpoint\ListProjects($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.harvestapp.com/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\OpenApi2\Tests\Expected\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}