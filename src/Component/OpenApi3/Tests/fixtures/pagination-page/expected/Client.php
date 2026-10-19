<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationPage;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\Client\Client
{
    /**
     * @param array{
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\Repo[]
     */
    public function listRepos(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Endpoint\ListRepos($queryParameters));
    }
    /**
     * Iterates over every page of {@see self::listRepos()} ("page" pagination), yielding the items of each page.
     * A page is only requested once the previous one has been consumed.
     * @param array{
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException
     *
     * @return \Generator<int, \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\Repo>
     */
    public function listReposPaginated(array $queryParameters = []): \Generator
    {
        $queryParameters['page'] ??= 1;
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Endpoint\ListRepos($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\Repo[] $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            $items = $page;
            if ([] === $items) {
                return;
            }
            foreach ($items as $item) {
                yield $item;
            }
            ++$queryParameters['page'];
        }
    }
    /**
     * @param array{
     *    "q": string,
     *    "p"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\SearchPage
     */
    public function search(array $queryParameters)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Endpoint\Search($queryParameters));
    }
    /**
     * Iterates over every page of {@see self::search()} ("page" pagination), yielding the items of each page.
     * A page is only requested once the previous one has been consumed.
     * @param array{
     *    "q": string,
     *    "p"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Exception\BadResponseException
     *
     * @return \Generator<int, string>
     */
    public function searchPaginated(array $queryParameters): \Generator
    {
        $queryParameters['p'] ??= 1;
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Endpoint\Search($queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Model\SearchPage $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            $items = $page->results ?? [];
            if ([] === $items) {
                return;
            }
            foreach ($items as $item) {
                yield $item;
            }
            ++$queryParameters['p'];
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\PaginationPage\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}