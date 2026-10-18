<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Runtime\Client\Client
{
    /**
     * @param array{
     *    "$top"?: int,
     *    "$skiptoken"?: string,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Model\UserCollection
     */
    public function listUsers(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Endpoint\ListUsers($queryParameters));
    }
    /**
     * Iterates over every page of {@see self::listUsers()} ("next-link" pagination), yielding the items of each page.
     * A page is only requested once the previous one has been consumed.
     * @param array{
     *    "$top"?: int,
     *    "$skiptoken"?: string,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Exception\BadResponseException
     *
     * @return \Generator<int, \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Model\User>
     */
    public function listUsersPaginated(array $queryParameters = []): \Generator
    {
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Endpoint\ListUsers($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Model\UserCollection $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            foreach ($page->value ?? [] as $item) {
                yield $item;
            }
            $nextLink = $page->odataNextLink ?? null;
            if (null === $nextLink || '' === $nextLink) {
                return;
            }
            $nextQueryParameters = \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Runtime\Client\Pagination::nextQueryParameters($nextLink, $endpoint->getUri(), $queryParameters, ['$top' => 'int']);
            if ($nextQueryParameters === $queryParameters) {
                return;
            }
            $queryParameters = $nextQueryParameters;
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\PaginationNextLink\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}