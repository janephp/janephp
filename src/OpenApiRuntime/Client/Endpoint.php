<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @deprecated Deprecated since v6.2.0, will removed in v7.0.0 and is already replaced by generated Runtime
 */
interface Endpoint
{
    /**
     * Get body for an endpoint.
     *
     * Return value consist of an array where the first item will be a list of headers to add on the request (like the Content Type)
     * And the second value consist of the body object.
     */
    public function getBody(SerializerInterface $serializer, $streamFactory = null): array;

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
     * Get the headers of an endpoint.
     */
    public function getHeaders(array $baseHeaders = []): array;

    /**
     * Get security scopes of an endpoint.
     */
    public function getAuthenticationScopes(): array;

    /**
     * Parse and transform a PSR7 Response into a different object.
     *
     * Implementations may vary depending the status code of the response and the fetch mode used.
     */
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT);
}
