<?php

namespace Jane\Component\OpenApiCommon\Generator\Pagination;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

/**
 * The `pagination` generation option, normalized.
 *
 * Each entry is `[path regex, method, config]` (or `[path regex, config]`,
 * the method then defaults to GET). The path regex follows the
 * `whitelisted-paths` semantics: it is matched with `#<regex>#` against the
 * specification path of each operation.
 *
 * Structural problems are collected instead of thrown, so they can be
 * reported together with the problems found against the specification.
 */
final class PaginationConfiguration
{
    public const STRATEGY_CURSOR = 'cursor';
    public const STRATEGY_PAGE = 'page';
    public const STRATEGY_LINK_HEADER = 'link-header';
    public const STRATEGY_NEXT_LINK = 'next-link';
    public const STRATEGIES = [
        self::STRATEGY_CURSOR,
        self::STRATEGY_PAGE,
        self::STRATEGY_LINK_HEADER,
        self::STRATEGY_NEXT_LINK,
    ];

    /** Yield every item of every page */
    public const YIELD_ITEMS = 'items';
    /** Yield every page model */
    public const YIELD_PAGES = 'pages';

    /**
     * The cursor and next-link strategies read the response body: it has to
     * be a model, holding the items. The other ones also accept a JSON array
     * of items as response, when `items` is omitted.
     */
    private const REQUIRED_KEYS = [
        self::STRATEGY_CURSOR => ['items', 'param', 'next-cursor'],
        self::STRATEGY_PAGE => ['param'],
        self::STRATEGY_LINK_HEADER => [],
        self::STRATEGY_NEXT_LINK => ['items', 'next'],
    ];

    private const KNOWN_KEYS = ['strategy', 'items', 'param', 'next-cursor', 'next', 'yield', 'max-pages'];

    /** @var array<int, array{regex: string, method: string, config: array<string, mixed>}> */
    private array $entries = [];

    /** @var list<string> */
    private array $errors = [];

    /**
     * @param array<mixed> $entries the raw `pagination` option
     */
    public function __construct(array $entries)
    {
        if (!array_is_list($entries)) {
            $this->errors[] = 'pagination: expected a list of [path regex, method, config] entries.';

            return;
        }

        foreach ($entries as $index => $entry) {
            $this->addEntry($index, $entry);
        }
    }

    public function isEmpty(): bool
    {
        return [] === $this->entries && [] === $this->errors;
    }

    /**
     * @return list<string>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * The first valid entry matching the operation.
     *
     * @return array{index: int, config: array<string, mixed>}|null
     */
    public function match(OperationGuess $operation): ?array
    {
        foreach ($this->entries as $index => $entry) {
            if (strtoupper($operation->getMethod()) !== $entry['method']) {
                continue;
            }

            if (preg_match(\sprintf('#%s#', $entry['regex']), $operation->getPath())) {
                return ['index' => $index, 'config' => $entry['config']];
            }
        }

        return null;
    }

    /**
     * @return list<int>
     */
    public function getEntryIndexes(): array
    {
        return array_keys($this->entries);
    }

    public function describeEntry(int $index): string
    {
        $entry = $this->entries[$index] ?? null;

        if (null === $entry) {
            return \sprintf('pagination[%d]', $index);
        }

        return \sprintf('pagination[%d] (%s "%s")', $index, $entry['method'], $entry['regex']);
    }

    private function addEntry(int $index, mixed $entry): void
    {
        $prefix = \sprintf('pagination[%d]', $index);

        if (!\is_array($entry) || !array_is_list($entry) || !\in_array(\count($entry), [2, 3], true)) {
            $this->errors[] = \sprintf('%s: expected a [path regex, method, config] entry.', $prefix);

            return;
        }

        [$regex, $method, $config] = 2 === \count($entry) ? [$entry[0], OperationGuess::GET, $entry[1]] : $entry;
        $errors = [];

        if (!\is_string($regex) || '' === $regex) {
            $errors[] = \sprintf('%s: the path regex must be a non-empty string.', $prefix);
        } elseif (false === @preg_match(\sprintf('#%s#', $regex), '')) {
            $errors[] = \sprintf('%s: "%s" is not a valid path regex.', $prefix, $regex);
        }

        if (!\is_string($method) || OperationGuess::GET !== strtoupper($method)) {
            $errors[] = \sprintf('%s: only GET operations can be paginated, "%s" given.', $prefix, \is_string($method) ? $method : get_debug_type($method));
        }

        if (!\is_array($config)) {
            $this->errors = array_merge($this->errors, $errors, [\sprintf('%s: the config must be an array.', $prefix)]);

            return;
        }

        $errors = array_merge($errors, $this->validateConfig($prefix, $config));

        if ([] !== $errors) {
            $this->errors = array_merge($this->errors, $errors);

            return;
        }

        $this->entries[$index] = [
            'regex' => $regex,
            'method' => OperationGuess::GET,
            'config' => array_merge(['items' => null, 'yield' => self::YIELD_ITEMS, 'max-pages' => null], $config),
        ];
    }

    /**
     * @param array<mixed> $config
     *
     * @return list<string>
     */
    private function validateConfig(string $prefix, array $config): array
    {
        $errors = [];

        foreach (array_keys($config) as $key) {
            if (!\in_array($key, self::KNOWN_KEYS, true)) {
                $errors[] = \sprintf('%s: unknown key "%s", expected one of "%s".', $prefix, $key, implode('", "', self::KNOWN_KEYS));
            }
        }

        $strategy = $config['strategy'] ?? null;

        if (!\is_string($strategy) || !\in_array($strategy, self::STRATEGIES, true)) {
            $errors[] = \sprintf('%s: the "strategy" key must be one of "%s".', $prefix, implode('", "', self::STRATEGIES));

            return $errors;
        }

        foreach (self::REQUIRED_KEYS[$strategy] as $key) {
            if (!\is_string($config[$key] ?? null) || '' === $config[$key]) {
                $errors[] = \sprintf('%s: the "%s" strategy requires a non-empty "%s" string.', $prefix, $strategy, $key);
            }
        }

        foreach (['items', 'param', 'next-cursor', 'next'] as $key) {
            if (!\in_array($key, self::REQUIRED_KEYS[$strategy], true) && \array_key_exists($key, $config) && (!\is_string($config[$key]) || '' === $config[$key])) {
                $errors[] = \sprintf('%s: the "%s" key must be a non-empty string.', $prefix, $key);
            }
        }

        if (\array_key_exists('yield', $config) && !\in_array($config['yield'], [self::YIELD_ITEMS, self::YIELD_PAGES], true)) {
            $errors[] = \sprintf('%s: the "yield" key must be "%s" or "%s".', $prefix, self::YIELD_ITEMS, self::YIELD_PAGES);
        }

        if (null !== ($config['max-pages'] ?? null) && (!\is_int($config['max-pages']) || $config['max-pages'] < 1)) {
            $errors[] = \sprintf('%s: the "max-pages" key must be a positive integer.', $prefix);
        }

        return $errors;
    }
}
