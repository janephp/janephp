<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client;

interface AuthenticationPlugin
{
    /**
     * Decorate the request with the authentication data.
     *
     * @param string               $method  HTTP method of the request
     * @param string               $url     URL of the request
     * @param array<string, mixed> $options Symfony HttpClient request options, passed by reference:
     *                                      header based authentications should add data to the
     *                                      'headers' option, query parameter based ones to the
     *                                      'query' option.
     */
    public function decorate(string $method, string $url, array &$options): void;

    /**
     * The scope this authentication plugin applies to.
     */
    public function getScope(): string;
}
