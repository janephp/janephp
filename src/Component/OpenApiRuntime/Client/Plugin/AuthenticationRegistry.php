<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client\Plugin;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

/**
 * Decorator carrying the authentication plugins of a generated client.
 *
 * Instances act as decorator factories: applying one to an HttpClientInterface
 * returns a client that reads the endpoint's authentication scopes from the
 * request 'extra' option bag (the only option group Symfony HttpClient
 * guarantees to forward untouched), applies the matching AuthenticationPlugin
 * instances and strips the marker before forwarding the request.
 */
final class AuthenticationRegistry implements HttpClientInterface
{
    public const SCOPES_OPTION = 'jane_authentication_scopes';

    /**
     * @param AuthenticationPlugin[] $authenticationPlugins
     */
    public function __construct(
        private readonly array $authenticationPlugins,
        private readonly ?HttpClientInterface $httpClient = null,
    ) {
    }

    /**
     * Decorator factory: apply the registry on top of an HttpClientInterface.
     */
    public function __invoke(HttpClientInterface $httpClient): self
    {
        return new self($this->authenticationPlugins, $httpClient);
    }

    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        $scopes = $options['extra'][self::SCOPES_OPTION] ?? null;

        if (null !== $scopes) {
            unset($options['extra'][self::SCOPES_OPTION]);

            if ([] === $options['extra']) {
                unset($options['extra']);
            }

            foreach ($this->authenticationPlugins as $authenticationPlugin) {
                if (\in_array($authenticationPlugin->getScope(), (array) $scopes, true)) {
                    $authenticationPlugin->decorate($method, $url, $options);
                }
            }
        }

        return $this->inner()->request($method, $url, $options);
    }

    public function stream(ResponseInterface|iterable $responses, ?float $timeout = null): ResponseStreamInterface
    {
        return $this->inner()->stream($responses, $timeout);
    }

    public function withOptions(array $options): static
    {
        return new self($this->authenticationPlugins, $this->inner()->withOptions($options));
    }

    private function inner(): HttpClientInterface
    {
        return $this->httpClient ?? throw new \LogicException(\sprintf('The "%s" decorator must be applied to a "%s" (via its __invoke method) before use.', self::class, HttpClientInterface::class));
    }
}
