<?php

namespace Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader;

class Client extends \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\Client
{
    /**
     * @param string $owner
     * @param array{
     *    "state"?: string,
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model\Issue[]
     */
    public function listIssues(string $owner, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Endpoint\ListIssues($owner, $queryParameters));
    }
    /**
     * Iterates over every page of {@see self::listIssues()} ("link-header" pagination), yielding the items of each page.
     * A page is only requested once the previous one has been consumed.
     * @param string $owner
     * @param array{
     *    "state"?: string,
     *    "page"?: int,
     *    "per_page"?: int,
     * } $queryParameters
     * @throws \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Exception\BadResponseException
     *
     * @return \Generator<int, \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model\Issue>
     */
    public function listIssuesPaginated(string $owner, array $queryParameters = []): \Generator
    {
        while (true) {
            $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Endpoint\ListIssues($owner, $queryParameters);
            $response = $this->executeRawEndpoint($endpoint);
            /** @var \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Model\Issue[] $page */
            $page = $endpoint->parseResponse($response, $this->serializer);
            foreach ($page as $item) {
                yield $item;
            }
            $nextLink = \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\Pagination::nextLinkFromHeaders($response->getHeaders(false));
            if (null === $nextLink) {
                return;
            }
            $nextQueryParameters = \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\Pagination::nextQueryParameters($nextLink, $endpoint->getUri(), $queryParameters, ['page' => 'int', 'per_page' => 'int']);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi3\Tests\Expected\PaginationLinkHeader\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}