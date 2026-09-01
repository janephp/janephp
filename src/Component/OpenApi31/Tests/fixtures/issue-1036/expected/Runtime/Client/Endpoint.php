<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
interface Endpoint
{
    /**
     * Get body for an endpoint.
     *
     * Return value consist of an array where the first item will be a list of headers to add on the request (like the Content Type)
     * And the second value consist of the body object.
     */
    public function getBody(SerializerInterface $serializer): array;
    /**
     * Get the query string of an endpoint without the starting ? (like foo=foo&bar=bar).
     */
    public function getQueryString(): string;
    /**
     * Get the URI of an endpoint (like /foo-uri).
     */
    public function getUri(): string;
    /**
     * Get the HTTP method of an endpoint (like GET, POST, ...).
     */
    public function getMethod(): string;
    /**
     * Get the fetch mode of the endpoint: a FetchMode value ('lazy' by default
     * on GET/HEAD operations, 'eager' on every other verb).
     */
    public function getFetchMode(): string;
    /**
     * Get the headers of an endpoint.
     */
    public function getHeaders(array $baseHeaders = []): array;
    /**
     * Get security scopes of an endpoint.
     */
    public function getAuthenticationScopes(): array;
    /**
     * Parse and transform an HTTP response into a different object.
     *
     * Implementations may vary depending on the status code of the response.
     */
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer);
}