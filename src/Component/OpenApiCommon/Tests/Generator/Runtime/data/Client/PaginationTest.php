<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Runtime\data\Client;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

// The real, namespace-less runtime template is exercised directly: it is the
// exact file copied into generated clients.
if (!class_exists('Pagination', false)) {
    require_once __DIR__ . '/../../../../../Generator/Runtime/Client/Pagination.php';
}

final class PaginationTest extends TestCase
{
    /**
     * @param array<string, list<string>> $headers
     */
    #[DataProvider('provideLinkHeaders')]
    public function testReadsTheNextLinkFromTheLinkHeaders(array $headers, ?string $expected): void
    {
        self::assertSame($expected, \Pagination::nextLinkFromHeaders($headers));
    }

    /**
     * @return \Generator<string, array{0: array<string, list<string>>, 1: string|null}>
     */
    public static function provideLinkHeaders(): \Generator
    {
        yield 'no link header' => [[], null];
        yield 'single next link' => [['link' => ['<https://api.example.com/items?page=2>; rel="next"']], 'https://api.example.com/items?page=2'];
        yield 'next among other relations' => [['link' => ['<https://api.example.com/items?page=1>; rel="prev", <https://api.example.com/items?page=3>; rel="next", <https://api.example.com/items?page=9>; rel="last"']], 'https://api.example.com/items?page=3'];
        yield 'several header values' => [['link' => ['<https://api.example.com/items?page=1>; rel="prev"', '<https://api.example.com/items?page=3>; rel=next']], 'https://api.example.com/items?page=3'];
        yield 'space-separated relation types' => [['link' => ['<https://api.example.com/items?page=3>; title="Next"; rel="last next"']], 'https://api.example.com/items?page=3'];
        yield 'last page' => [['link' => ['<https://api.example.com/items?page=1>; rel="prev", <https://api.example.com/items?page=1>; rel="first"']], null];
    }

    public function testMergesTheQueryOfTheNextLinkOverTheCurrentQuery(): void
    {
        self::assertSame(
            ['state' => 'open', 'page' => 2, 'per_page' => '10', 'cursor' => 'abc'],
            \Pagination::nextQueryParameters('https://api.example.com/v1/repos/jane/issues?page=2&per_page=10&cursor=abc', '/repos/jane/issues', ['state' => 'open', 'page' => 1], ['page' => 'int'])
        );
    }

    public function testCastsTheDeclaredScalarTypes(): void
    {
        self::assertSame(
            ['limit' => 10, 'ratio' => 0.5, 'deleted' => false, 'token' => '42', 'page' => 'two'],
            \Pagination::nextQueryParameters('?limit=10&ratio=0.5&deleted=false&token=42&page=two', '/items', [], ['limit' => 'int', 'ratio' => 'float', 'deleted' => 'bool', 'page' => 'int'])
        );
    }

    public function testRejectsALinkToAnotherPath(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('The next page link "https://api.example.com/pulls?page=2" does not point at the paginated endpoint "/issues"');

        \Pagination::nextQueryParameters('https://api.example.com/pulls?page=2', '/issues', []);
    }
}
