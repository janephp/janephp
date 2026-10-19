<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Tests\GeneratedFixtureClientTrait;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * Runtime coverage of the generated `*Paginated()` client methods, one
 * fixture per pagination strategy (issue #324).
 */
class PaginationRuntimeTest extends TestCase
{
    use GeneratedFixtureClientTrait;

    private const NAMESPACE = 'Jane\Component\OpenApi3\Tests\PaginationRuntime';

    /** @var list<string> */
    private array $requestedUrls = [];

    public static function setUpBeforeClass(): void
    {
        foreach (['Cursor' => 'pagination-cursor', 'Page' => 'pagination-page', 'LinkHeader' => 'pagination-link-header', 'NextLink' => 'pagination-next-link'] as $namespace => $fixture) {
            self::generateFixtureClient(__DIR__ . '/fixtures/' . $fixture, self::NAMESPACE . '\\' . $namespace);
        }

        self::generateFixtureClient(__DIR__ . '/fixtures/pagination-cursor', self::NAMESPACE . '\\CursorLenient', ['throw-unexpected-status-code' => false]);
    }

    public static function tearDownAfterClass(): void
    {
        self::removeGeneratedFixtureClients();
    }

    public function testCursorFollowsTheNextCursorUntilItIsNull(): void
    {
        $client = $this->createClient('Cursor', [
            self::json(['data' => [['id' => 'a'], ['id' => 'b']], 'meta' => ['nextCursor' => 'c2']]),
            self::json(['data' => [['id' => 'c']], 'meta' => ['nextCursor' => 'c3']]),
            self::json(['data' => [['id' => 'd']], 'meta' => ['nextCursor' => null]]),
        ]);

        $items = $client->listItemsPaginated(['limit' => 2]);

        self::assertSame([], $this->requestedUrls, 'no page must be requested before the iteration starts.');
        self::assertInstanceOf(self::NAMESPACE . '\Cursor\Model\Item', $items->current());
        self::assertCount(1, $this->requestedUrls, 'only the first page must be requested to read the first item.');

        $ids = [];
        foreach ($items as $index => $item) {
            $ids[$index] = $item->id;
        }

        self::assertSame(['a', 'b', 'c', 'd'], $ids, 'items must be yielded across pages with sequential keys.');
        self::assertSame([
            'https://api.example.com/items?limit=2',
            'https://api.example.com/items?limit=2&cursor=c2',
            'https://api.example.com/items?limit=2&cursor=c3',
        ], $this->requestedUrls);
    }

    public function testCursorStopsWhenTheServerRepeatsTheCursor(): void
    {
        $client = $this->createClient('Cursor', [
            self::json(['data' => [['id' => 'a']], 'meta' => ['nextCursor' => 'same']]),
            self::json(['data' => [['id' => 'b']], 'meta' => ['nextCursor' => 'same']]),
            self::json(['data' => [['id' => 'never']], 'meta' => ['nextCursor' => null]]),
        ]);

        self::assertCount(2, iterator_to_array($client->listItemsPaginated()));
        self::assertCount(2, $this->requestedUrls);
    }

    public function testCursorStopsWhenTheCursorIsMissing(): void
    {
        $client = $this->createClient('Cursor', [
            self::json(['data' => [['id' => 'a']]]),
        ]);

        self::assertCount(1, iterator_to_array($client->listItemsPaginated()));
        self::assertCount(1, $this->requestedUrls);
    }

    public function testAnUndeclaredStatusStopsTheIterationWhenItDoesNotThrow(): void
    {
        $client = $this->createClient('CursorLenient', [
            self::json(['data' => [['id' => 'a']], 'meta' => ['nextCursor' => 'c2']]),
            new MockResponse('', ['http_code' => 503]),
        ]);

        self::assertCount(1, iterator_to_array($client->listItemsPaginated()));
        self::assertCount(2, $this->requestedUrls);
    }

    public function testCursorYieldsPagesUpToMaxPages(): void
    {
        $responses = [];
        for ($index = 1; $index <= 5; ++$index) {
            $responses[] = self::json(['events' => [['type' => 'e' . $index]], 'nextAfter' => 'after' . $index]);
        }
        $client = $this->createClient('Cursor', $responses);

        $pages = iterator_to_array($client->listEventsPaginated());

        $lastEventType = $pages[2]->events[0]->type;

        self::assertCount(3, $pages);
        self::assertContainsOnlyInstancesOf(self::NAMESPACE . '\Cursor\Model\EventPage', $pages);
        self::assertSame('e3', $lastEventType);
        self::assertCount(3, $this->requestedUrls);
    }

    public function testPageIncrementsFromTheSpecDefaultUntilAnEmptyPage(): void
    {
        $client = $this->createClient('Page', [
            self::json([['name' => 'r1'], ['name' => 'r2']]),
            self::json([['name' => 'r3']]),
            self::json([]),
        ]);

        $names = array_map(static fn (object $repo): string => $repo->name, iterator_to_array($client->listReposPaginated(['per_page' => 2])));

        self::assertSame(['r1', 'r2', 'r3'], $names);
        self::assertSame([
            'https://api.example.com/repos?page=1&per_page=2',
            'https://api.example.com/repos?page=2&per_page=2',
            'https://api.example.com/repos?page=3&per_page=2',
        ], $this->requestedUrls);
    }

    public function testPageReadsTheItemsFromTheConfiguredPath(): void
    {
        $client = $this->createClient('Page', [
            self::json(['results' => ['a', 'b']]),
            self::json(['results' => []]),
        ]);

        self::assertSame(['a', 'b'], iterator_to_array($client->searchPaginated(['q' => 'jane'])));
        self::assertSame([
            'https://api.example.com/search?q=jane&p=1',
            'https://api.example.com/search?q=jane&p=2',
        ], $this->requestedUrls);
    }

    public function testLinkHeaderFollowsTheNextRelation(): void
    {
        $client = $this->createClient('LinkHeader', [
            self::json([['number' => 1]], ['Link' => '<https://api.example.com/repos/jane/issues?state=open&page=2>; rel="next", <https://api.example.com/repos/jane/issues?state=open&page=3>; rel="last"']),
            self::json([['number' => 2]], ['Link' => '<https://api.example.com/repos/jane/issues?state=open&page=1>; rel="prev", <https://api.example.com/repos/jane/issues?state=open&page=3>; rel="next"']),
            self::json([['number' => 3]], ['Link' => '<https://api.example.com/repos/jane/issues?state=open&page=2>; rel="prev"']),
        ]);

        $numbers = array_map(static fn (object $issue): int => $issue->number, iterator_to_array($client->listIssuesPaginated('jane', ['state' => 'open'])));

        self::assertSame([1, 2, 3], $numbers);
        self::assertSame([
            'https://api.example.com/repos/jane/issues?state=open',
            'https://api.example.com/repos/jane/issues?state=open&page=2',
            'https://api.example.com/repos/jane/issues?state=open&page=3',
        ], $this->requestedUrls);
    }

    public function testLinkHeaderStopsWithoutLinkHeader(): void
    {
        $client = $this->createClient('LinkHeader', [
            self::json([['number' => 1]]),
        ]);

        self::assertCount(1, iterator_to_array($client->listIssuesPaginated('jane')));
        self::assertCount(1, $this->requestedUrls);
    }

    public function testLinkHeaderRejectsALinkToAnotherPath(): void
    {
        $client = $this->createClient('LinkHeader', [
            self::json([['number' => 1]], ['Link' => '<https://api.example.com/repos/other/pulls?page=2>; rel="next"']),
        ]);

        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('does not point at the paginated endpoint');

        iterator_to_array($client->listIssuesPaginated('jane'));
    }

    public function testNextLinkMergesTheQueryOfTheNextLink(): void
    {
        $client = $this->createClient('NextLink', [
            self::json(['value' => [['id' => 'u1']], '@odata.nextLink' => 'https://graph.example.com/v1.0/users?$top=1&$skiptoken=abc']),
            self::json(['value' => [['id' => 'u2']], '@odata.nextLink' => 'https://graph.example.com/v1.0/users?$top=1&$skiptoken=def']),
            self::json(['value' => [['id' => 'u3']]]),
        ]);

        $ids = array_map(static fn (object $user): string => $user->id, iterator_to_array($client->listUsersPaginated(['$top' => 1])));

        self::assertSame(['u1', 'u2', 'u3'], $ids);
        self::assertSame([
            'https://api.example.com/users?$top=1',
            'https://api.example.com/users?$top=1&$skiptoken=abc',
            'https://api.example.com/users?$top=1&$skiptoken=def',
        ], array_map('urldecode', $this->requestedUrls));
    }

    /**
     * @param list<MockResponse> $responses
     */
    private function createClient(string $fixture, array $responses): object
    {
        $this->requestedUrls = [];
        $httpClient = new MockHttpClient(function (string $method, string $url) use (&$responses): MockResponse {
            $this->requestedUrls[] = $url;

            return array_shift($responses) ?? throw new \LogicException('No more page to serve.');
        }, 'https://api.example.com');

        $clientClass = self::NAMESPACE . '\\' . $fixture . '\Client';

        return $clientClass::create($httpClient);
    }

    /**
     * @param array<string, string> $headers
     */
    private static function json(mixed $body, array $headers = []): MockResponse
    {
        return new MockResponse(json_encode($body, \JSON_THROW_ON_ERROR), [
            'http_code' => 200,
            'response_headers' => array_merge(['Content-Type' => 'application/json'], $headers),
        ]);
    }
}
