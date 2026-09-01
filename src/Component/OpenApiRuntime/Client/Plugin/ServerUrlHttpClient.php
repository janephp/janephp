<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client\Plugin;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

/**
 * Decorator rewriting request URLs to an OpenAPI server URL (scheme, host,
 * port and base path of the spec's servers entry, or host + basePath).
 *
 * It cannot rely on HttpClient's `base_uri` option: RFC 3986 resolution drops
 * the base URI's path when the request URL is an absolute path (e.g. "/pets"),
 * which is exactly the shape of every generated endpoint URI. The base path is
 * therefore prepended explicitly here.
 */
final class ServerUrlHttpClient implements HttpClientInterface
{
    public function __construct(
        private readonly string $serverUrl,
        private readonly ?HttpClientInterface $httpClient = null,
    ) {
        $parts = parse_url($serverUrl);

        if (!\is_array($parts) || !isset($parts['scheme'], $parts['host'])) {
            throw new \InvalidArgumentException(\sprintf('Invalid server URL "%s": an absolute URL with a scheme and a host is required.', $serverUrl));
        }
    }

    /**
     * Decorator factory: apply the server URL rewrite on top of an HttpClientInterface.
     */
    public function __invoke(HttpClientInterface $httpClient): self
    {
        return new self($this->serverUrl, $httpClient);
    }

    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        return $this->inner()->request($method, $this->resolveUrl($url), $options);
    }

    public function stream(ResponseInterface|iterable $responses, ?float $timeout = null): ResponseStreamInterface
    {
        return $this->inner()->stream($responses, $timeout);
    }

    public function withOptions(array $options): static
    {
        return new self($this->serverUrl, $this->inner()->withOptions($options));
    }

    private function resolveUrl(string $url): string
    {
        if (str_contains($url, '://')) {
            return $url;
        }

        $query = '';

        if (str_contains($url, '?')) {
            [$url, $query] = explode('?', $url, 2);
        }

        if ('' !== $url && '/' !== $url[0]) {
            $url = '/' . $url;
        }

        $parts = parse_url($this->serverUrl);
        $resolved = \sprintf(
            '%s://%s%s%s%s',
            $parts['scheme'],
            $parts['host'],
            isset($parts['port']) ? ':' . $parts['port'] : '',
            isset($parts['path']) ? rtrim($parts['path'], '/') : '',
            $url
        );

        return '' !== $query ? $resolved . '?' . $query : $resolved;
    }

    private function inner(): HttpClientInterface
    {
        return $this->httpClient ?? throw new \LogicException(\sprintf('The "%s" decorator must be applied to a "%s" (via its __invoke method) before use.', self::class, HttpClientInterface::class));
    }
}
