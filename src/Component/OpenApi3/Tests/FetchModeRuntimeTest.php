<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiRuntime\Client\FetchMode;
use Jane\Component\OpenApiRuntime\Client\GhostFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * Runtime coverage of the three fetch modes (ADR 0011, ghost proxies per
 * ADR 0014): eager parses (and throws) at call time, preload sends
 * immediately and parses on first access of the returned lazy ghost proxy,
 * lazy defers send and auth to first access. Endpoints whose success body is
 * not a single generated model (JSON arrays and maps, scalar bodies,
 * no-content responses) degrade to the eager behavior.
 */
class FetchModeRuntimeTest extends TestCase
{
    private static bool $autoloaderRegistered = false;

    public static function setUpBeforeClass(): void
    {
        if (self::$autoloaderRegistered) {
            return;
        }

        spl_autoload_register(static function (string $class): void {
            foreach ([
                'Jane\\Component\\OpenApi3\\Tests\\FetchModeEager' => 'fetch-mode-eager',
                'Jane\\Component\\OpenApi3\\Tests\\FetchModePreload' => 'fetch-mode-preload',
                'Jane\\Component\\OpenApi3\\Tests\\FetchModeHead' => 'fetch-mode-head',
                'Jane\\Component\\OpenApi3\\Tests\\FetchModeDefault' => 'fetch-mode-default',
            ] as $prefix => $fixture) {
                if (str_starts_with($class, $prefix . '\\')) {
                    $file = __DIR__ . '/fixtures/' . $fixture . '/expected/' . str_replace('\\', '/', substr($class, \strlen($prefix) + 1)) . '.php';
                    if (is_file($file)) {
                        require_once $file;
                    }

                    return;
                }
            }
        });

        self::$autoloaderRegistered = true;
    }

    private static function isLazyObjectUninitialized(object $proxy): bool
    {
        $reflectionProxy = new \ReflectionClass($proxy::class);

        return $reflectionProxy->isUninitializedLazyObject($proxy);
    }

    private static function mockClient(int $status = 200, string $body = '{"name":"Rex"}', array $headers = ['Content-Type' => 'application/json']): MockHttpClient
    {
        return new MockHttpClient(static fn (): MockResponse => new MockResponse($body, ['http_code' => $status, 'response_headers' => $headers]));
    }

    public function testEagerRequestsAndParsesAtCallTime(): void
    {
        $mock = self::mockClient();
        $client = FetchModeEager\Client::create($mock);

        $parsed = $client->getPets();

        self::assertSame(1, $mock->getRequestsCount(), 'eager mode must have sent the request at call time.');
        self::assertInstanceOf(FetchModeEager\Model\PetsGetResponse200::class, $parsed);
        self::assertSame('Rex', $parsed->name);
    }

    public function testEagerThrowsDocumentedExceptionAtCallTime(): void
    {
        $mock = self::mockClient(404, '{"message":"no pet"}');
        $client = FetchModeEager\Client::create($mock);

        try {
            $client->getPets();
            self::fail('Expected the documented 404 exception to be thrown at call time.');
        } catch (FetchModeEager\Exception\GetPetsNotFoundException $e) {
            self::assertSame(404, $e->getCode());
        }

        self::assertSame(1, $mock->getRequestsCount());
    }

    public function testPreloadRegistersTheRequestAndParsesOnFirstAccess(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient();
        $client = FetchModePreload\Client::create($mock);

        $proxy = $client->getPets();

        self::assertSame(1, $mock->getRequestsCount(), 'preload mode must have registered the request eagerly.');
        self::assertInstanceOf(FetchModePreload\Model\PetsGetResponse200::class, $proxy);
        self::assertTrue(self::isLazyObjectUninitialized($proxy), 'the preload ghost must not be parsed yet.');

        self::assertSame('Rex', $proxy->name);
        self::assertFalse(self::isLazyObjectUninitialized($proxy), 'accessing the ghost must have parsed the response.');
    }

    public function testPreloadErrorsSurfaceOnFirstAccess(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient(404, '{"message":"no pet"}');
        $client = FetchModePreload\Client::create($mock);

        $proxy = $client->getPets();
        self::assertSame(1, $mock->getRequestsCount());

        $this->expectException(FetchModePreload\Exception\GetPetsNotFoundException::class);
        $proxy->name;
    }

    public function testLazyDefersTheSendToFirstAccess(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient();
        $client = FetchModeDefault\Client::create($mock);

        $proxy = $client->getPet('pet-1');

        self::assertSame(0, $mock->getRequestsCount(), 'lazy mode must not send anything before access.');
        self::assertTrue(self::isLazyObjectUninitialized($proxy));

        self::assertSame('Rex', $proxy->name);
        self::assertSame(1, $mock->getRequestsCount(), 'accessing the proxy must send the request.');
    }

    public function testLazyErrorsSurfaceOnFirstAccess(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient(404, '{"message":"no pet"}');
        $client = FetchModeDefault\Client::create($mock);

        $proxy = $client->getPet('pet-1');
        self::assertSame(0, $mock->getRequestsCount());

        $this->expectException(FetchModeDefault\Exception\GetPetNotFoundException::class);
        $proxy->name;
    }

    public function testLazyAppliesAuthenticationAtSendTime(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient();
        $authSpy = new AuthDecorateCounter();
        $client = FetchModeDefault\Client::create($mock, [new \Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry([$authSpy])]);

        $proxy = $client->getPet('pet-1');

        self::assertSame(0, $authSpy->calls, 'lazy mode must defer authentication to send time.');

        $proxy->name;

        self::assertSame(1, $authSpy->calls, 'authentication must be applied when the deferred request is sent.');
    }

    public function testNonGhostLazyEndpointDegradesToEager(): void
    {
        if (!GhostFactory::canCreate()) {
            self::markTestSkipped('native lazy objects require PHP >= 8.4');
        }
        $mock = self::mockClient(200, '[{"name":"Anna"}]');
        $client = FetchModeDefault\Client::create($mock);

        self::assertSame(FetchMode::Lazy->value, (new FetchModeDefault\Endpoint\GetOwners())->getFetchMode());
        self::assertNull((new FetchModeDefault\Endpoint\GetOwners())->getTargetClass(), 'arrays cannot be ghosted.');

        $owners = $client->getOwners();

        self::assertSame(1, $mock->getRequestsCount(), 'a non-ghostable lazy endpoint must send and parse at call time.');
        self::assertCount(1, $owners);
        self::assertInstanceOf(FetchModeDefault\Model\OwnersGetResponse200Item::class, $owners[0]);
        self::assertSame('Anna', $owners[0]->name);
    }

    public function testMutatingVerbsStayEagerWithADefaultFetchMode(): void
    {
        $mock = self::mockClient(200, 'null');
        $client = FetchModeDefault\Client::create($mock);

        self::assertSame(FetchMode::Eager->value, (new FetchModeDefault\Endpoint\CreatePet(new FetchModeDefault\Model\PetsPostBody()))->getFetchMode());
        self::assertSame(FetchMode::Eager->value, (new FetchModeDefault\Endpoint\GetPets())->getFetchMode());
        self::assertSame(FetchMode::Lazy->value, (new FetchModeDefault\Endpoint\GetPet('pet-1'))->getFetchMode());

        self::assertNull($client->createPet(new FetchModeDefault\Model\PetsPostBody()), 'POST must return the parsed value, not a ghost proxy.');
    }
}

final class AuthDecorateCounter implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    public int $calls = 0;

    public function decorate(string $method, string $url, array &$options): void
    {
        ++$this->calls;
        $options['headers']['X-Api-Key'] = 'token';
    }

    public function getScope(): string
    {
        return 'apiKey';
    }
}
