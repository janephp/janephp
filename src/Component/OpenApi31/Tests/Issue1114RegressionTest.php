<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Regression tests for https://github.com/janephp/janephp/issues/1114: with `enums-as-objects`, the
 * `enums-unknown-value` option decides how a value outside the enum is read instead of always throwing.
 */
class Issue1114RegressionTest extends TestCase
{
    private ?string $fixtureDirectory = null;

    protected function tearDown(): void
    {
        if (null !== $this->fixtureDirectory) {
            $this->removeDirectory($this->fixtureDirectory);
        }
    }

    public function testNullModeReadsUnknownAndWrongTypedValuesAsNull(): void
    {
        $normalizer = $this->generate('Issue1114NullExpected', ['enums-unknown-value' => 'null']);

        $item = $normalizer->denormalize(
            ['status' => 'archived', 'priority' => 'high', 'tags' => ['available', 'archived']],
            'Jane\Component\OpenApi31\Tests\Issue1114NullExpected\Model\Item',
            'json'
        );

        self::assertNull($item->status);
        self::assertNull($item->priority);
        self::assertSame([\constant('Jane\Component\OpenApi31\Tests\Issue1114NullExpected\Model\ItemStatus::Available'), null], $item->tags);

        $known = ['status' => 'out-of-stock', 'priority' => 2, 'tags' => ['available']];
        $item = $normalizer->denormalize($known, 'Jane\Component\OpenApi31\Tests\Issue1114NullExpected\Model\Item', 'json');

        self::assertSame(\constant('Jane\Component\OpenApi31\Tests\Issue1114NullExpected\Model\ItemStatus::OutOfStock'), $item->status);
        self::assertSame($known, $normalizer->normalize($item, 'json'));
    }

    public function testScalarModeKeepsUnknownAndWrongTypedValues(): void
    {
        $normalizer = $this->generate('Issue1114ScalarExpected', ['enums-unknown-value' => 'scalar', 'validation' => true]);
        $context = ['skip_validation' => true];

        $unknown = ['status' => 'archived', 'priority' => 9, 'tags' => ['available', 'archived']];
        $item = $normalizer->denormalize($unknown, 'Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\Item', 'json', $context);

        self::assertSame('archived', $item->status);
        self::assertSame(9, $item->priority);
        self::assertSame([\constant('Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\ItemStatus::Available'), 'archived'], $item->tags);
        self::assertSame($unknown, $normalizer->normalize($item, 'json', $context));

        // A value of another type than the backing type is kept as is: an int status reads as its string.
        $item = $normalizer->denormalize(['status' => 7], 'Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\Item', 'json', $context);
        self::assertSame('7', $item->status);

        $known = ['status' => 'out-of-stock', 'priority' => 2, 'tags' => ['available']];
        $item = $normalizer->denormalize($known, 'Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\Item', 'json');
        self::assertSame(\constant('Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\ItemStatus::OutOfStock'), $item->status);
        self::assertSame($known, $normalizer->normalize($item, 'json'));

        // Validation stays as it is: the Choice constraint still rejects an unknown string value.
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Model validation failed');
        $normalizer->denormalize(['status' => 'archived'], 'Jane\Component\OpenApi31\Tests\Issue1114ScalarExpected\Model\Item', 'json');
    }

    public function testUnknownValuesStillThrowByDefault(): void
    {
        $normalizer = $this->generate('Issue1114ThrowExpected', []);

        $this->expectException(\ValueError::class);
        $normalizer->denormalize(['status' => 'archived'], 'Jane\Component\OpenApi31\Tests\Issue1114ThrowExpected\Model\Item', 'json');
    }

    /**
     * Generate the schema with `enums-as-objects` and the given options, then return the generated JaneObjectNormalizer.
     *
     * @param array<string, mixed> $options
     */
    private function generate(string $namespace, array $options): object
    {
        $this->fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1114-' . bin2hex(random_bytes(8));
        $generatedDirectory = $this->fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $this->fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Issue 1114', 'version' => '1.0.0'],
            'paths' => [
                '/items' => [
                    'get' => [
                        'operationId' => 'getItem',
                        'responses' => [
                            '200' => [
                                'description' => 'An item',
                                'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Item']]],
                            ],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'Item' => [
                        'type' => 'object',
                        'required' => ['status'],
                        'properties' => [
                            'status' => ['$ref' => '#/components/schemas/ItemStatus'],
                            'priority' => ['$ref' => '#/components/schemas/Priority'],
                            'tags' => ['type' => 'array', 'items' => ['$ref' => '#/components/schemas/ItemStatus']],
                        ],
                    ],
                    'ItemStatus' => ['type' => 'string', 'enum' => ['available', 'out-of-stock']],
                    'Priority' => ['type' => 'integer', 'enum' => [1, 2, 3]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi31\Tests\\' . $namespace,
            'directory' => $generatedDirectory,
            'enums-as-objects' => true,
        ] + $options, true) . ';');

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $command->execute(new ArrayInput(['--config-file' => $configFile], $command->getDefinition()), new NullOutput());

        $this->requireGeneratedClasses($generatedDirectory);

        $normalizerClass = self::widenedClassName('Jane\Component\OpenApi31\Tests\\' . $namespace . '\Normalizer\JaneObjectNormalizer');
        $normalizer = new $normalizerClass();
        $normalizer->setDenormalizer($normalizer);
        $normalizer->setNormalizer($normalizer);

        return $normalizer;
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * excluded from PHPStan's scan (generated code).
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private function requireGeneratedClasses(string $generatedDirectory): void
    {
        $files = [];
        foreach (['Runtime', 'Model', 'Normalizer', 'Validator'] as $directory) {
            $path = $generatedDirectory . '/' . $directory;
            if (!is_dir($path)) {
                continue;
            }

            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            /** @var \SplFileInfo $file */
            foreach ($iterator as $file) {
                if ($file->isFile() && 'php' === $file->getExtension()) {
                    $files[] = $file->getPathname();
                }
            }
        }

        // Generated files depend on each other and are not autoloadable: require them in passes.
        $pending = $files;
        while ([] !== $pending) {
            $deferred = [];
            foreach ($pending as $file) {
                try {
                    require_once $file;
                } catch (\Error $error) {
                    $deferred[] = $file;
                }
            }

            if (\count($deferred) === \count($pending)) {
                require_once $pending[0];
            }

            $pending = $deferred;
        }
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        foreach (scandir($path) ?: [] as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            is_dir($entryPath) ? $this->removeDirectory($entryPath) : unlink($entryPath);
        }

        rmdir($path);
    }
}
