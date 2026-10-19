<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationCursor;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\Client
{
    /**
     * List the items
     * @param array{
     *    "cursor"?: string,
     *    "limit"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\ItemPage
     */
    public function listItems(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint\ListItems($queryParameters));
    }
    /**
     * Iterates over every page of {@see self::listItems()} ("cursor" pagination), yielding the items of each page.
     * A page is only requested once the previous one has been consumed.
     * @param array{
     *    "cursor"?: string,
     *    "limit"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Generator<int, \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\Item>
     */
    public function listItemsPaginated(array $queryParameters = []): \Generator
    {
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint\ListItems($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\ItemPage $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            foreach ($page->data ?? [] as $item) {
                yield $item;
            }
            $cursor = $page->meta->nextCursor ?? null;
            if (null === $cursor || '' === $cursor || $cursor === ($queryParameters['cursor'] ?? null)) {
                return;
            }
            $queryParameters['cursor'] = $cursor;
        }
    }
    /**
     * @param string $id
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\Item
     */
    public function getItem(string $id)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint\GetItem($id));
    }
    /**
     * @param array{
     *    "after"?: string,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage
     */
    public function listEvents(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint\ListEvents($queryParameters));
    }
    /**
     * Iterates over every page of {@see self::listEvents()} ("cursor" pagination), yielding each page.
     * A page is only requested once the previous one has been consumed.
     * @param array{
     *    "after"?: string,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Exception\BadResponseException
     *
     * @return \Generator<int, \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage>
     */
    public function listEventsPaginated(array $queryParameters = []): \Generator
    {
        $pageCount = 0;
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Endpoint\ListEvents($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Model\EventPage $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            yield $page;
            if (++$pageCount >= 3) {
                return;
            }
            $cursor = $page->nextAfter ?? null;
            if (null === $cursor || '' === $cursor || $cursor === ($queryParameters['after'] ?? null)) {
                return;
            }
            $queryParameters['after'] = $cursor;
        }
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        $plugins = [];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\PaginationCursor\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}