<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiRuntime\Client\FetchMode;
use Jane\Component\OpenApiRuntime\Client\Result;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * Runtime coverage of the three fetch modes (ADR 0011): eager parses (and
 * throws) at call time, preload sends immediately and parses on access, lazy
 * defers both send and auth to first access.
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

    public function testPreloadReturnsInFlightResultAndParsesOnAccess(): void
    {
        $mock = self::mockClient();
        $client = FetchModePreload\Client::create($mock);

        $result = $client->getPets();

        self::assertInstanceOf(Result::class, $result);
        self::assertSame(1, $mock->getRequestsCount(), 'preload mode must have registered/sent the request eagerly.');
        self::assertTrue($result->isInitialized());
        self::assertSame(200, $result->getStatusCode());
        self::assertInstanceOf(FetchModePreload\Model\PetsGetResponse200::class, $result->toObject());
    }

    public function testPreloadResultsCanBeAwaitedCancelledAndStreamed(): void
    {
        $mock = self::mockClient();
        $client = FetchModePreload\Client::create($mock);

        $first = $client->getPets();
        $first->await();
        self::assertTrue($first->isInitialized());

        $second = $client->getPets();
        $second->cancel();

        $streamed = [];
        foreach ($client->stream([$first]) as $response => $chunk) {
            if ($chunk->isLast()) {
                $streamed[] = $response->getStatusCode();
            }
        }

        self::assertSame([200], $streamed);
        self::assertSame(2, $mock->getRequestsCount(), 'stream() drives the already in-flight response, no extra request.');
    }

    public function testLazyDefersTheSendToFirstAccess(): void
    {
        $mock = self::mockClient();
        $client = FetchModeDefault\Client::create($mock);

        $result = $client->getPet('pet-1');

        self::assertInstanceOf(Result::class, $result);
        self::assertSame(0, $mock->getRequestsCount(), 'lazy mode must not send anything before access.');
        self::assertFalse($result->isInitialized());

        self::assertInstanceOf(FetchModeDefault\Model\PetsPetIdGetResponse200::class, $result->toObject());
        self::assertSame(1, $mock->getRequestsCount(), 'accessing the result must send the request.');
    }

    public function testLazyResultCanBeCancelledBeforeSending(): void
    {
        $mock = self::mockClient();
        $client = FetchModeDefault\Client::create($mock);

        $result = $client->getPet('pet-1');
        $result->cancel();

        self::assertSame(0, $mock->getRequestsCount(), 'cancelling an unsent lazy result must not send anything.');

        $this->expectException(\LogicException::class);
        $result->toObject();
    }

    public function testLazyAppliesAuthenticationAtSendTime(): void
    {
        $mock = self::mockClient();
        $authSpy = new AuthDecorateCounter();
        $client = FetchModeDefault\Client::create($mock, [new \Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry([$authSpy])]);

        $result = $client->getPet('pet-1');

        self::assertSame(0, $authSpy->calls, 'lazy mode must defer authentication to send time.');

        $result->toObject();

        self::assertSame(1, $authSpy->calls, 'authentication must be applied when the deferred request is sent.');
    }

    public function testMutatingVerbsStayEagerWithADefaultFetchMode(): void
    {
        $mock = self::mockClient(200, 'null');
        $client = FetchModeDefault\Client::create($mock);

        self::assertSame(FetchMode::Eager->value, (new FetchModeDefault\Endpoint\CreatePet(new FetchModeDefault\Model\PetsPostBody()))->getFetchMode());
        self::assertSame(FetchMode::Eager->value, (new FetchModeDefault\Endpoint\GetPets())->getFetchMode());
        self::assertSame(FetchMode::Lazy->value, (new FetchModeDefault\Endpoint\GetPet('pet-1'))->getFetchMode());

        self::assertNull($client->createPet(new FetchModeDefault\Model\PetsPostBody()), 'POST must return the parsed value, not a Result.');
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
