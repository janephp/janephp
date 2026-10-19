<?php

namespace Jane\Component\OpenApi2\Tests;

use Jane\Component\OpenApiCommon\Tests\GeneratedFixtureClientTrait;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * Runtime coverage of the generated `*Paginated()` client methods on a
 * Swagger 2 specification (issue #324).
 */
class PaginationRuntimeTest extends TestCase
{
    use GeneratedFixtureClientTrait;

    private const NAMESPACE = 'Jane\Component\OpenApi2\Tests\PaginationRuntime\Cursor';

    public static function setUpBeforeClass(): void
    {
        self::generateFixtureClient(__DIR__ . '/fixtures/pagination-cursor', self::NAMESPACE);
    }

    public static function tearDownAfterClass(): void
    {
        self::removeGeneratedFixtureClients();
    }

    public function testCursorFollowsTheNextCursorUntilItIsNull(): void
    {
        $requestedUrls = [];
        $responses = [
            self::json(['data' => [['id' => 'a'], ['id' => 'b']], 'meta' => ['nextCursor' => 'c2']]),
            self::json(['data' => [['id' => 'c']], 'meta' => ['nextCursor' => null]]),
        ];
        $httpClient = new MockHttpClient(static function (string $method, string $url) use (&$requestedUrls, &$responses): MockResponse {
            $requestedUrls[] = $url;

            return array_shift($responses) ?? throw new \LogicException('No more page to serve.');
        }, 'https://api.example.com');

        $clientClass = self::NAMESPACE . '\Client';
        $client = $clientClass::create($httpClient);

        $ids = array_map(static fn (object $item): string => $item->id, iterator_to_array($client->listItemsPaginated()));

        self::assertSame(['a', 'b', 'c'], $ids);
        self::assertSame([
            'https://api.example.com/items?limit=20',
            'https://api.example.com/items?limit=20&cursor=c2',
        ], $requestedUrls);
    }

    private static function json(mixed $body): MockResponse
    {
        return new MockResponse(json_encode($body, \JSON_THROW_ON_ERROR), [
            'http_code' => 200,
            'response_headers' => ['Content-Type' => 'application/json'],
        ]);
    }
}
