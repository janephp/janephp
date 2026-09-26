<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * RFC 3339 fame for date-time properties: the strict
 * \DateTimeInterface::RFC3339 parse format rejects a `Z` designator and
 * fractional seconds, which are valid RFC 3339 (GH#1102). The generated
 * denormalizer now falls back to a lenient \DateTime parse for those shapes,
 * while the union condition never routes relative date strings ("tomorrow",
 * ...) to the date branch.
 */
class Issue1102RegressionTest extends TestCase
{
    public function testValidRfc3339ValuesDenormalize(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-1102-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 1102',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/dates' => [
                    'get' => [
                        'operationId' => 'getDates',
                        'responses' => [
                            '200' => [
                                'description' => 'A date holder',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/DateHolder',
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
                    'DateHolder' => [
                        'type' => 'object',
                        'required' => ['dt'],
                        'properties' => [
                            'dt' => [
                                'type' => 'string',
                                'format' => 'date-time',
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue1102Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            $modelClass = 'Jane\Component\OpenApi3\Tests\Issue1102Expected\Model\DateHolder';
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue1102Expected\Normalizer\DateHolderNormalizer');

            $this->requireGeneratedClasses($generatedDirectory);

            $normalizer = new $normalizerClass();

            // Valid RFC 3339 values that the strict 'Y-m-d\TH:i:sP' format rejects.
            foreach ([
                '2026-08-31T15:39:33Z',
                '2026-08-31T15:39:33.601Z',
                '2026-08-31T15:39:33+02:00',
                '2026-08-31T15:39:33.601+02:00',
            ] as $validValue) {
                $object = $normalizer->denormalize(['dt' => $validValue], $modelClass, 'json');

                self::assertInstanceOf(\DateTime::class, $object->dt, \sprintf('"%s" should denormalize.', $validValue));
            }

            // A `Z` designator normalizes like any other UTC value when serialized
            // back with the default output format (numeric offset, no GMT coercion).
            $object = $normalizer->denormalize(['dt' => '2026-08-31T15:39:33Z'], $modelClass, 'json');
            self::assertSame('2026-08-31T15:39:33+00:00', $object->dt->format(\DateTimeInterface::RFC3339));

            // Leniency must not accept relative date strings.
            try {
                $normalizer->denormalize(['dt' => 'tomorrow'], $modelClass, 'json');
                self::fail('Expected an InvalidDateException for a relative date string.');
            } catch (\Throwable $e) {
                self::assertStringContainsString('Invalid date value', $e->getMessage());
            }

            // Malformed strings that fit no RFC 3339 shape are rejected as well.
            try {
                $normalizer->denormalize(['dt' => 'not a date'], $modelClass, 'json');
                self::fail('Expected an InvalidDateException for a malformed date string.');
            } catch (\Throwable $e) {
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
