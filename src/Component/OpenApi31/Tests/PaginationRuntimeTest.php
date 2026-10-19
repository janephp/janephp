<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Tests\GeneratedFixtureClientTrait;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * Runtime coverage of the generated `*Paginated()` client methods on an
 * OpenAPI 3.1 specification (issue #324).
 */
class PaginationRuntimeTest extends TestCase
{
    use GeneratedFixtureClientTrait;

    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\PaginationRuntime\NextLink';

    public static function setUpBeforeClass(): void
    {
        self::generateFixtureClient(__DIR__ . '/fixtures/pagination-next-link', self::NAMESPACE);
    }

    public static function tearDownAfterClass(): void
    {
        self::removeGeneratedFixtureClients();
    }

    public function testNextLinkFollowsTheBodyLinkUntilItIsNull(): void
    {
        $requestedUrls = [];
        $responses = [
            // the integer "$top" of the link is cast back to an int for the query options resolver
            self::json(['value' => [['id' => 'u1']], '@odata.nextLink' => 'https://graph.example.com/v1.0/users?$top=1&$skiptoken=abc']),
            self::json(['value' => [['id' => 'u2']], '@odata.nextLink' => null]),
        ];
        $httpClient = new MockHttpClient(static function (string $method, string $url) use (&$requestedUrls, &$responses): MockResponse {
            $requestedUrls[] = urldecode($url);

            return array_shift($responses) ?? throw new \LogicException('No more page to serve.');
        }, 'https://api.example.com');

        $clientClass = self::NAMESPACE . '\Client';
        $client = $clientClass::create($httpClient);

        $ids = array_map(static fn (object $user): string => $user->id, iterator_to_array($client->listUsersPaginated()));

        self::assertSame(['u1', 'u2'], $ids);
        self::assertSame([
            'https://api.example.com/users',
            'https://api.example.com/users?$top=1&$skiptoken=abc',
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
