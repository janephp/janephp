<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\JsonSchema\Tests\PhpSyntaxGate;
use PhpParser\Node;
use PhpParser\NodeFinder;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

/**
 * A `patternProperties` key is data: the generated normalizers must carry it
 * as a string literal, whatever characters it contains.
 */
class PatternPropertiesGenerationTest extends TestCase
{
    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-pattern-properties-' . bin2hex(random_bytes(8));
        (new Filesystem())->mkdir($this->tmpDir);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    #[DataProvider('patternProvider')]
    public function testPatternIsEmittedAsStringLiteral(string $pattern): void
    {
        $directory = $this->generate($pattern);

        self::assertSame([], PhpSyntaxGate::errors($directory));

        $expected = '/' . str_replace('/', '\/', $pattern) . '/';
        $arguments = $this->pregMatchPatternArguments($directory);

        // The model level pattern (normalize + denormalize) and the nested
        // property pattern (normalize + denormalize).
        self::assertGreaterThanOrEqual(4, \count($arguments));

        foreach ($arguments as $argument) {
            self::assertInstanceOf(Node\Scalar\String_::class, $argument);
            self::assertSame($expected, $argument->value);
        }
    }

    /**
     * @return iterable<string, array{0: string}>
     */
    public static function patternProvider(): iterable
    {
        yield 'quote and call' => ["'.phpinfo().'"];
        yield 'single quote' => ["it's"];
        yield 'backslash' => ['a\\b'];
        yield 'escaped backslash' => ['^\\\\$'];
        yield 'variable interpolation' => ['$x {$y}'];
        yield 'extension prefix' => ['x-.*'];
        yield 'numeric key' => ['123'];
        yield 'closing tag' => ['a?>b'];
        yield 'delimiter' => ['^/'];
    }

    public function testPatternNeverReachesExecutableTokens(): void
    {
        $marker = 'JANE_PATTERN_MARKER';
        $directory = $this->generate("a'." . $marker . ".'b");

        self::assertSame([], PhpSyntaxGate::errors($directory));

        $found = 0;

        foreach ((new Finder())->in($directory)->files()->name('*.php') as $file) {
            foreach (token_get_all($file->getContents()) as $token) {
                if (!\is_array($token) || !str_contains($token[1], $marker)) {
                    continue;
                }

                ++$found;
                self::assertSame(\T_CONSTANT_ENCAPSED_STRING, $token[0], \sprintf('The pattern reached a "%s" token in %s.', token_name($token[0]), $file->getRelativePathname()));
            }
        }

        self::assertGreaterThanOrEqual(4, $found);
    }

    /**
     * @param non-empty-string $pattern
     * @param non-empty-string $literal
     */
    #[DataProvider('existingPatternProvider')]
    public function testExistingPatternsAreUnchanged(string $pattern, string $literal): void
    {
        $directory = $this->generate($pattern);

        $normalizer = (string) file_get_contents($directory . '/Normalizer/TestNormalizer.php');

        self::assertSame(4, substr_count($normalizer, 'preg_match(' . $literal . ', '));
    }

    /**
     * @return iterable<string, array{0: string, 1: string}>
     */
    public static function existingPatternProvider(): iterable
    {
        yield 'extension prefix' => ['^x-', "'/^x-/'"];
        yield 'escaped characters' => ['^[a-zA-Z0-9\.\-_]+$', "'/^[a-zA-Z0-9\.\-_]+$/'"];
        yield 'delimiter' => ['^/', "'/^\//'"];
    }

    private function generate(string $pattern): string
    {
        $directory = $this->tmpDir . '/generated';

        file_put_contents($this->tmpDir . '/schema.json', json_encode([
            'type' => 'object',
            'properties' => [
                'name' => ['type' => 'string'],
                'nested' => [
                    'type' => 'object',
                    'patternProperties' => [
                        $pattern => ['type' => 'string'],
                    ],
                ],
            ],
            'patternProperties' => [
                $pattern => ['type' => 'string'],
            ],
        ], \JSON_THROW_ON_ERROR));

        $registry = new Registry();
        $registry->addSchema(new Schema($this->tmpDir . '/schema.json', 'JaneTest\PatternProperties', $directory, 'Test'));
        $registry->addOutputDirectory($directory);

        Jane::build([])->generate($registry);
        (new Printer(new Standard(['shortArraySyntax' => true])))->output($registry);

        return $directory;
    }

    /**
     * First argument of every `preg_match()` call of the generated normalizers.
     *
     * @return list<Node\Expr>
     */
    private function pregMatchPatternArguments(string $directory): array
    {
        $parser = (new ParserFactory())->createForHostVersion();
        $finder = new NodeFinder();
        $arguments = [];

        foreach ((new Finder())->in($directory . '/Normalizer')->files()->name('TestNormalizer.php') as $file) {
            $calls = $finder->find((array) $parser->parse($file->getContents()), static fn (Node $node): bool => $node instanceof Node\Expr\FuncCall
                && $node->name instanceof Node\Name
                && 'preg_match' === $node->name->toString());

            foreach ($calls as $call) {
                \assert($call instanceof Node\Expr\FuncCall);
                $first = $call->args[0] ?? null;
                self::assertInstanceOf(Node\Arg::class, $first);
                $arguments[] = $first->value;
            }
        }

        return $arguments;
    }
}
