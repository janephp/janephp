<?php

namespace ApiPlatform\Demo;

class Client extends \ApiPlatform\Demo\Runtime\Client\Client
{
    /**
     * Retrieves the collection of Book resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var int $itemsPerPage The number of items per page
     *     @var bool $archived 
     *     @var string $order[id] 
     *     @var string $order[title] 
     *     @var string $order[author] 
     *     @var string $order[isbn] 
     *     @var string $order[publicationDate] 
     *     @var array $properties[] 
     *     @var string $title 
     *     @var string $author 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     *
     * @return null|\ApiPlatform\Demo\Model\BooksGetLdjsonResponse200|\ApiPlatform\Demo\Model\BooksGetHaljsonResponse200|\ApiPlatform\Demo\Model\BookBookRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksGetCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksGetCollection($queryParameters, $accept), $fetch);
    }
    /**
     * Creates a Book resource.
     *
     * @param \ApiPlatform\Demo\Model\BookJsonld|\ApiPlatform\Demo\Model\BookJsonhal|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiBooksPostBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksPostUnprocessableEntityException
     *
     * @return null|\ApiPlatform\Demo\Model\BookJsonldBookRead|\ApiPlatform\Demo\Model\BookJsonhalBookRead|\ApiPlatform\Demo\Model\BookBookRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksPost($requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksPost($requestBody, $accept), $fetch);
    }
    /**
     * Retrieves the collection of Review resources.
     *
     * @param string $bookId Book identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     *
     * @return null|\ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200|\ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200|\ApiPlatform\Demo\Model\ReviewReviewRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksBookIdreviewsGetCollection(string $bookId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksBookIdreviewsGetCollection($bookId, $queryParameters, $accept), $fetch);
    }
    /**
     * Removes the Book resource.
     *
     * @param string $id Book identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdDeleteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksIdDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksIdDelete($id), $fetch);
    }
    /**
     * Retrieves a Book resource.
     *
     * @param string $id Book identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdGetNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\BookJsonldBookRead|\ApiPlatform\Demo\Model\BookJsonhalBookRead|\ApiPlatform\Demo\Model\BookBookRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksIdGet(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksIdGet($id, $accept), $fetch);
    }
    /**
     * Updates the Book resource.
     *
     * @param string $id Book identifier
     * @param \ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPatchBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPatchUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPatchNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\BookJsonldBookRead|\ApiPlatform\Demo\Model\BookJsonhalBookRead|\ApiPlatform\Demo\Model\BookBookRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksIdPatch(string $id, \ApiPlatform\Demo\Model\Book $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksIdPatch($id, $requestBody, $accept), $fetch);
    }
    /**
     * Replaces the Book resource.
     *
     * @param string $id Book identifier
     * @param \ApiPlatform\Demo\Model\BookJsonld|\ApiPlatform\Demo\Model\BookJsonhal|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdPutNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\BookJsonldBookRead|\ApiPlatform\Demo\Model\BookJsonhalBookRead|\ApiPlatform\Demo\Model\BookBookRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksIdPut(string $id, $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksIdPut($id, $requestBody, $accept), $fetch);
    }
    /**
     * Replaces the Book resource.
     *
     * @param string $id Book identifier
     * @param \ApiPlatform\Demo\Model\BookJsonld|\ApiPlatform\Demo\Model\BookJsonhal|\ApiPlatform\Demo\Model\Book $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiBooksIdgenerateCoverPutNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function apiBooksIdgenerateCoverPut(string $id, $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiBooksIdgenerateCoverPut($id, $requestBody, $accept), $fetch);
    }
    /**
     * Retrieves the collection of Parchment resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200|\ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200|\ApiPlatform\Demo\Model\Parchment[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsGetCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsGetCollection($queryParameters, $accept), $fetch);
    }
    /**
     * Creates a Parchment resource.
     *
     * @param \ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsPostBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsPostUnprocessableEntityException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsPost($requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsPost($requestBody, $accept), $fetch);
    }
    /**
     * Removes the Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdDeleteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsIdDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsIdDelete($id), $fetch);
    }
    /**
     * Retrieves a Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdGetNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsIdGet(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsIdGet($id, $accept), $fetch);
    }
    /**
     * Updates the Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param \ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPatchNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsIdPatch(string $id, \ApiPlatform\Demo\Model\Parchment $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsIdPatch($id, $requestBody, $accept), $fetch);
    }
    /**
     * Replaces the Parchment resource.
     *
     * @param string $id Parchment identifier
     * @param \ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiParchmentsIdPutNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ParchmentJsonld|\ApiPlatform\Demo\Model\ParchmentJsonhal|\ApiPlatform\Demo\Model\Parchment|\Psr\Http\Message\ResponseInterface
     */
    public function apiParchmentsIdPut(string $id, $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiParchmentsIdPut($id, $requestBody, $accept), $fetch);
    }
    /**
     * Retrieves the collection of Review resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var int $itemsPerPage The number of items per page
     *     @var string $order[id] 
     *     @var string $order[publicationDate] 
     *     @var string $book 
     *     @var array $book[] 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewsGetLdjsonResponse200|\ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200|\ApiPlatform\Demo\Model\ReviewReviewRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsGetCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsGetCollection($queryParameters, $accept), $fetch);
    }
    /**
     * Creates a Review resource.
     *
     * @param \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite|\ApiPlatform\Demo\Model\ReviewJsonhalReviewWrite|\ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsPostBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsPostUnprocessableEntityException
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewJsonldReviewRead|\ApiPlatform\Demo\Model\ReviewJsonhalReviewRead|\ApiPlatform\Demo\Model\ReviewReviewRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsPost($requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsPost($requestBody, $accept), $fetch);
    }
    /**
     * Removes the Review resource.
     *
     * @param string $id Review identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdDeleteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsIdDelete(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsIdDelete($id), $fetch);
    }
    /**
     * Retrieves a Review resource.
     *
     * @param string $id Review identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdGetNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewJsonldReviewRead|\ApiPlatform\Demo\Model\ReviewJsonhalReviewRead|\ApiPlatform\Demo\Model\ReviewReviewRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsIdGet(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsIdGet($id, $accept), $fetch);
    }
    /**
     * Updates the Review resource.
     *
     * @param string $id Review identifier
     * @param \ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPatchNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewJsonldReviewRead|\ApiPlatform\Demo\Model\ReviewJsonhalReviewRead|\ApiPlatform\Demo\Model\ReviewReviewRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsIdPatch(string $id, \ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsIdPatch($id, $requestBody, $accept), $fetch);
    }
    /**
     * Replaces the Review resource.
     *
     * @param string $id Review identifier
     * @param \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite|\ApiPlatform\Demo\Model\ReviewJsonhalReviewWrite|\ApiPlatform\Demo\Model\ReviewReviewWrite $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPutBadRequestException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPutUnprocessableEntityException
     * @throws \ApiPlatform\Demo\Exception\ApiReviewsIdPutNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\ReviewJsonldReviewRead|\ApiPlatform\Demo\Model\ReviewJsonhalReviewRead|\ApiPlatform\Demo\Model\ReviewReviewRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiReviewsIdPut(string $id, $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiReviewsIdPut($id, $requestBody, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ApiPlatform\Demo\Model\StatsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function apiGetStats(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiGetStats(), $fetch);
    }
    /**
     * Retrieves the collection of TopBook resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     *
     * @return null|\ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200|\ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200|\ApiPlatform\Demo\Model\TopBook[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiTopBooksGetCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiTopBooksGetCollection($queryParameters, $accept), $fetch);
    }
    /**
     * Retrieves a TopBook resource.
     *
     * @param string $id TopBook identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header application/ld+json|application/hal+json|application/vnd.api+json|application/json|application/xml|text/xml|application/x-yaml|text/csv|text/html
     * @throws \ApiPlatform\Demo\Exception\ApiTopBooksIdGetNotFoundException
     *
     * @return null|\ApiPlatform\Demo\Model\TopBookJsonld|\ApiPlatform\Demo\Model\TopBookJsonhal|\ApiPlatform\Demo\Model\TopBook|\Psr\Http\Message\ResponseInterface
     */
    public function apiTopBooksIdGet(string $id, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ApiPlatform\Demo\Endpoint\ApiTopBooksIdGet($id, $accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ApiPlatform\Demo\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}