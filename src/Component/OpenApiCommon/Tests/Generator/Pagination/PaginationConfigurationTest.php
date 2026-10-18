<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Pagination;

use Jane\Component\OpenApiCommon\Generator\Pagination\PaginationConfiguration;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PaginationConfigurationTest extends TestCase
{
    public function testAnEmptyConfigurationIsEmpty(): void
    {
        $configuration = new PaginationConfiguration([]);

        self::assertTrue($configuration->isEmpty());
        self::assertSame([], $configuration->getErrors());
        self::assertNull($configuration->match(self::operation('/items')));
    }

    public function testMatchesWithTheWhitelistedPathsRegexSemantics(): void
    {
        $configuration = new PaginationConfiguration([
            ['^/items$', 'get', ['strategy' => 'link-header']],
            ['/users', ['strategy' => 'next-link', 'next' => '@odata.nextLink', 'items' => 'value']],
        ]);

        self::assertSame([], $configuration->getErrors());
        self::assertSame(0, $configuration->match(self::operation('/items'))['index'] ?? null);
        self::assertNull($configuration->match(self::operation('/items/{id}')));
        self::assertNull($configuration->match(self::operation('/items', OperationGuess::POST)));
        // unanchored regexes match anywhere in the path, the method defaults to GET
        self::assertSame(1, $configuration->match(self::operation('/groups/{id}/users'))['index'] ?? null);
    }

    public function testNormalizesTheOptionalKeys(): void
    {
        $configuration = new PaginationConfiguration([['^/items$', 'GET', ['strategy' => 'link-header']]]);

        self::assertSame(
            ['items' => null, 'yield' => PaginationConfiguration::YIELD_ITEMS, 'max-pages' => null, 'strategy' => 'link-header'],
            $configuration->match(self::operation('/items'))['config'] ?? null
        );
    }

    /**
     * @param array<mixed> $entries
     * @param list<string> $expectedErrors
     */
    #[DataProvider('provideInvalidConfigurations')]
    public function testCollectsEveryStructuralError(array $entries, array $expectedErrors): void
    {
        $configuration = new PaginationConfiguration($entries);

        self::assertSame($expectedErrors, $configuration->getErrors());
        self::assertFalse($configuration->isEmpty());
        self::assertSame([], $configuration->getEntryIndexes(), 'an invalid entry must not be applied.');
    }

    /**
     * @return \Generator<string, array{0: array<mixed>, 1: list<string>}>
     */
    public static function provideInvalidConfigurations(): \Generator
    {
        yield 'not a list' => [
            ['/items' => ['strategy' => 'cursor']],
            ['pagination: expected a list of [path regex, method, config] entries.'],
        ];

        yield 'malformed entry' => [
            ['^/items$'],
            ['pagination[0]: expected a [path regex, method, config] entry.'],
        ];

        yield 'invalid regex, method and strategy' => [
            [['^/items($', 'POST', ['strategy' => 'offset']]],
            [
                'pagination[0]: "^/items($" is not a valid path regex.',
                'pagination[0]: only GET operations can be paginated, "POST" given.',
                'pagination[0]: the "strategy" key must be one of "cursor", "page", "link-header", "next-link".',
            ],
        ];

        yield 'missing keys per strategy' => [
            [
                ['^/a$', 'GET', ['strategy' => 'cursor']],
                ['^/b$', 'GET', ['strategy' => 'page']],
                ['^/c$', 'GET', ['strategy' => 'next-link', 'items' => 'value']],
            ],
            [
                'pagination[0]: the "cursor" strategy requires a non-empty "items" string.',
                'pagination[0]: the "cursor" strategy requires a non-empty "param" string.',
                'pagination[0]: the "cursor" strategy requires a non-empty "next-cursor" string.',
                'pagination[1]: the "page" strategy requires a non-empty "param" string.',
                'pagination[2]: the "next-link" strategy requires a non-empty "next" string.',
            ],
        ];

        yield 'invalid optional keys' => [
            [['^/a$', 'GET', ['strategy' => 'link-header', 'items' => '', 'yield' => 'all', 'max-pages' => 0, 'limit' => 10]]],
            [
                'pagination[0]: unknown key "limit", expected one of "strategy", "items", "param", "next-cursor", "next", "yield", "max-pages".',
                'pagination[0]: the "items" key must be a non-empty string.',
                'pagination[0]: the "yield" key must be "items" or "pages".',
                'pagination[0]: the "max-pages" key must be a positive integer.',
            ],
        ];
    }

    private static function operation(string $path, string $method = OperationGuess::GET): OperationGuess
    {
        return new OperationGuess(new \stdClass(), new \stdClass(), $path, $method, '#/paths');
    }
}
