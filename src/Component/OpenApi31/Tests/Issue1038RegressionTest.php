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
 * A property declared as `anyOf: [<date-time string>, null]` used to pass any
 * string matching no anyOf branch (e.g. an empty string, or a date in the
 * wrong format) raw into the `?\DateTime` typed setter, causing a TypeError.
 *
 * The denormalization now resolves an empty string to null when the union
 * explicitly admits null (a deliberate leniency: an empty string is the common
 * wire encoding of an absent date), and reports any other non-parsing string
 * with the same clean InvalidDateException the plain date property path
 * throws since GH#764.
 *
 * Addresses issue https://github.com/janephp/janephp/issues/1038
 */
class Issue1038RegressionTest extends TestCase
{
    public function testAnyOfDateStringsMatchingNoBranchDoNotReachTheTypedSetter(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1038-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 1038',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/events' => [
                    'get' => [
                        'operationId' => 'getEvent',
                        'responses' => [
                            '200' => [
                                'description' => 'OK',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/Event',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'Timestamp' => [
                        'type' => 'string',
                        'format' => 'date-time',
                    ],
                    'Event' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => ['type' => 'string'],
                            'starts_at' => [
                                'anyOf' => [
                                    ['$ref' => '#/components/schemas/Timestamp'],
                                    ['type' => 'null'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi31\\\\Tests\\\\Issue1038Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            $modelClass = 'Jane\Component\OpenApi31\Tests\Issue1038Expected\Model\Event';
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi31\Tests\Issue1038Expected\Normalizer\EventNormalizer');

            self::assertFileExists($generatedDirectory . '/Model/Event.php');
            self::assertFileExists($generatedDirectory . '/Normalizer/EventNormalizer.php');

            $this->requireGeneratedClasses($generatedDirectory);

            $normalizer = new $normalizerClass();

            // Valid RFC 3339 date-time and explicit null keep working.
            $object = $normalizer->denormalize(['starts_at' => '2026-01-02T15:04:05+00:00'], $modelClass, 'json');
            self::assertInstanceOf(\DateTime::class, $object->startsAt);

            $object = $normalizer->denormalize(['starts_at' => null], $modelClass, 'json');
            self::assertNull($object->startsAt);

            // An empty string matches no anyOf branch: it used to reach setStartsAt(?\DateTime)
            // raw and TypeError; on a nullable date it now resolves to null.
            $object = $normalizer->denormalize(['starts_at' => ''], $modelClass, 'json');
            self::assertNull($object->startsAt);

            // Any other non-parsing string is reported with the clean InvalidDateException.
            try {
                $normalizer->denormalize(['starts_at' => 'tomorrow maybe'], $modelClass, 'json');

                self::fail('Expected an InvalidDateException when denormalizing a malformed date string.');
            } catch (\RuntimeException $e) {
                self::assertStringContainsString('Invalid date value', $e->getMessage());
            }
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * generated at runtime.
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private function requireGeneratedClasses(string $generatedDirectory): void
    {
        $directories = ['Runtime', 'Model', 'Normalizer', 'Validator'];
        $files = [];
        foreach ($directories as $directory) {
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

        /*
         * Generated files have cross-dependencies (interfaces, parent classes, traits) and are not
         * autoloadable, so the require order matters. Require them in multiple passes, deferring
         * the ones whose dependencies are not loaded yet.
         */
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
                // No progress: a real broken dependency, rethrow the actual error.
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

        $entries = scandir($path);
        if (false === $entries) {
            return;
        }

        foreach ($entries as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            if (is_dir($entryPath)) {
                $this->removeDirectory($entryPath);
                continue;
            }

            unlink($entryPath);
        }

        rmdir($path);
    }
}
