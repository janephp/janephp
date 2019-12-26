<?php

namespace ApiPlatform\Demo;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var array $properties[] Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
     *     @var string $order[id] 
     *     @var string $order[title] 
     *     @var string $order[author] 
     *     @var string $order[isbn] 
     *     @var string $order[publicationDate] 
     *     @var string $title 
     *     @var string $author 
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBookCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetBookCollection($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PostBookCollectionBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PostBookCollectionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postBookCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PostBookCollection($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\DeleteBookItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteBookItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\DeleteBookItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\GetBookItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getBookItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetBookItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PatchBookItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PatchBookItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchBookItem(string $id, \ApiPlatform\Demo\Model\Book $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PatchBookItem($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \stdClass|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PutBookItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutBookItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putBookItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PutBookItem($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\ApiBooksReviewsGetSubresourceNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksReviewsGetSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksReviewsGetSubresource($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment[]|\Psr\Http\Message\ResponseInterface
     */
    public function getParchmentCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetParchmentCollection($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass|\ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PostParchmentCollectionBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PostParchmentCollectionNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function postParchmentCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PostParchmentCollection($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\DeleteParchmentItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteParchmentItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\DeleteParchmentItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\GetParchmentItemNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function getParchmentItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetParchmentItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PatchParchmentItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PatchParchmentItemNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function patchParchmentItem(string $id, \ApiPlatform\Demo\Model\Parchment $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PatchParchmentItem($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \stdClass|\ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PutParchmentItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutParchmentItemNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function putParchmentItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PutParchmentItem($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReviewCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetReviewCollection($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass|\ApiPlatform\Demo\Model\Review $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PostReviewCollectionBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PostReviewCollectionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postReviewCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PostReviewCollection($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\DeleteReviewItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReviewItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\DeleteReviewItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\GetReviewItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReviewItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\GetReviewItem($id), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \ApiPlatform\Demo\Model\Review $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PatchReviewItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PatchReviewItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchReviewItem(string $id, \ApiPlatform\Demo\Model\Review $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PatchReviewItem($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id 
     * @param \stdClass|\ApiPlatform\Demo\Model\Review $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\PutReviewItemBadRequestException
     * @throws \ApiPlatform\Demo\Exception\PutReviewItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putReviewItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ApiPlatform\Demo\Endpoint\PutReviewItem($id, $requestBody), $fetch);
    }
    public static function create($httpClient = null, \Jane\OpenApiRuntime\Client\Authentication $authentication = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            if (null !== $authentication) {
                $plugins[] = $authentication->getPlugin();
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ApiPlatform\Demo\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}