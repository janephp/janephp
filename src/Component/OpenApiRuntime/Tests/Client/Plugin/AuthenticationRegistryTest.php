<?php

namespace Jane\Component\OpenApiRuntime\Tests\Client\Plugin;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

class AuthenticationRegistryTest extends TestCase
{
    public function testDecoratesTheClientAndStripsTheScopesOption(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([self::plugin('A', 'header-A')])($spy);

        $registry->request('GET', '/test', ['extra' => [AuthenticationRegistry::SCOPES_OPTION => ['A']]]);

        self::assertCount(1, $spy->requests);
        self::assertSame([
            'GET',
            '/test',
            ['headers' => ['header-A' => 'A']],
        ], $spy->requests[0]);
    }

    public function testNoPluginsForwardsTheRequestUnchanged(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([])($spy);

        $registry->request('GET', '/test', ['extra' => [AuthenticationRegistry::SCOPES_OPTION => ['unknown']], 'headers' => ['X-Base' => '1']]);

        self::assertSame(['GET', '/test', ['headers' => ['X-Base' => '1']]], $spy->requests[0]);
    }

    public function testMultipleScopesApplyEveryMatchingPlugin(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([
            self::plugin('A', 'header-A'),
            self::plugin('B', 'header-B'),
            self::plugin('C', 'header-C'),
        ])($spy);

        $registry->request('GET', '/test', ['extra' => [AuthenticationRegistry::SCOPES_OPTION => ['A', 'C']]]);

        self::assertSame([
            'GET',
            '/test',
            ['headers' => ['header-A' => 'A', 'header-C' => 'C']],
        ], $spy->requests[0]);
    }

    public function testUnmatchedScopesDoNotDecorate(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([
            self::plugin('A', 'header-A'),
            self::plugin('B', 'header-B'),
        ])($spy);

        $registry->request('GET', '/test', ['extra' => [AuthenticationRegistry::SCOPES_OPTION => ['A']]]);

        self::assertSame(['GET', '/test', ['headers' => ['header-A' => 'A']]], $spy->requests[0]);
    }

    public function testScopesMarkerIsOnlyStrippedWhenPresent(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([])($spy);

        $registry->request('GET', '/test', ['headers' => ['X-Base' => '1']]);

        self::assertSame(['GET', '/test', ['headers' => ['X-Base' => '1']]], $spy->requests[0]);
    }

    public function testQueryBasedDecorationsReachTheOptions(): void
    {
        $spy = new SpyHttpClient();
        $registry = new AuthenticationRegistry([
            new class() implements AuthenticationPlugin {
                public function decorate(string $method, string $url, array &$options): void
                {
                    $options['query']['api_key'] = 'secret';
                }

                public function getScope(): string
                {
                    return 'query';
                }
            },
        ])($spy);

        $registry->request('GET', '/test', ['extra' => [AuthenticationRegistry::SCOPES_OPTION => ['query']]]);

        self::assertSame(['GET', '/test', ['query' => ['api_key' => 'secret']]], $spy->requests[0]);
    }

    public function testRegistryWithoutDecoratedClientCannotBeUsed(): void
    {
        $registry = new AuthenticationRegistry([]);

        $this->expectException(\LogicException::class);
        $registry->request('GET', '/test');
    }

    private static function plugin(string $scope, string $headerName): AuthenticationPlugin
    {
        return new class($scope, $headerName) implements AuthenticationPlugin {
            public function __construct(private readonly string $scope, private readonly string $headerName)
            {
            }

            public function decorate(string $method, string $url, array &$options): void
            {
                $options['headers'][$this->headerName] = $this->scope;
            }

            public function getScope(): string
            {
                return $this->scope;
            }
        };
    }
}

final class SpyHttpClient implements HttpClientInterface
{
    /** @var list<array{0: string, 1: string, 2: array<string, mixed>}> */
    public array $requests = [];
    private readonly MockHttpClient $mock;

    public function __construct()
    {
        $this->mock = new MockHttpClient(static fn (): MockResponse => new MockResponse('{}', ['http_code' => 200]));
    }

    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        $this->requests[] = [$method, $url, $options];

        return $this->mock->request($method, $url, $options);
    }

    public function stream(ResponseInterface|iterable $responses, ?float $timeout = null): ResponseStreamInterface
    {
        return $this->mock->stream($responses, $timeout);
    }

    public function withOptions(array $options): static
    {
        return $this;
    }
}
