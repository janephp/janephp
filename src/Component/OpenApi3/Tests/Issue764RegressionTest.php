<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue764RegressionTest extends TestCase
{
    public function testEmptyStringForDatePropertyThrowsCleanExceptionInsteadOfFatalError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-764-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 764',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/shipments' => [
                    'get' => [
                        'operationId' => 'listShipments',
                        'responses' => [
                            '200' => [
                                'description' => 'A shipment',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/Shipment',
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
                    'Shipment' => [
                        'type' => 'object',
                        'required' => ['estimated_collection_date', 'estimated_delivery_date'],
                        'properties' => [
                            'estimated_collection_date' => [
                                'type' => 'string',
                                'format' => 'date',
                                'pattern' => 'yyyy-mm-dd',
                                'description' => 'Date of collection for shipment',
                            ],
                            'estimated_delivery_date' => [
                                'type' => 'string',
                                'format' => 'date',
                                'description' => 'Date of delivery for shipment, if present',
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue764Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            $modelClass = 'Jane\Component\OpenApi3\Tests\Issue764Expected\Model\Shipment';
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue764Expected\Normalizer\ShipmentNormalizer');

            self::assertFileExists($generatedDirectory . '/Model/Shipment.php');
            self::assertFileExists($generatedDirectory . '/Normalizer/ShipmentNormalizer.php');

            // The generated denormalization must guard \DateTime::createFromFormat failures.
            $normalizerContent = file_get_contents($generatedDirectory . '/Normalizer/ShipmentNormalizer.php');
            self::assertIsString($normalizerContent);
            self::assertStringContainsString('InvalidDateException', $normalizerContent);

            $this->requireGeneratedClasses($generatedDirectory);

            $normalizer = new $normalizerClass();

            // An empty string used to reach \DateTime::createFromFormat(...)->setTime(...) and
            // fatally error with "Call to a member function setTime() on bool".
            try {
                $normalizer->denormalize([
                    'estimated_collection_date' => '',
                    'estimated_delivery_date' => '',
                ], $modelClass, 'json');

                self::fail('Expected an InvalidDateException when denormalizing an empty date string.');
            } catch (\RuntimeException $e) {
                self::assertStringContainsString('Invalid date value', $e->getMessage());
            }

            $object = $normalizer->denormalize([
                'estimated_collection_date' => '2026-08-24',
                'estimated_delivery_date' => '2026-08-25',
            ], $modelClass, 'json');

            self::assertInstanceOf(\DateTime::class, $object->getEstimatedCollectionDate());
            self::assertSame('00:00', $object->getEstimatedCollectionDate()->format('H:i'));
            self::assertInstanceOf(\DateTime::class, $object->getEstimatedDeliveryDate());
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testValidationRejectsEmptyStringsForDateAndPatternProperties(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-764-validation-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 764 validation',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/events' => [
                    'get' => [
                        'operationId' => 'listEvents',
                        'responses' => [
                            '200' => [
                                'description' => 'An event',
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
                    'Event' => [
                        'type' => 'object',
                        'properties' => [
                            'dateField' => [
                                'type' => 'string',
                                'format' => 'date',
                            ],
                            'patternField' => [
                                'type' => 'string',
                                'pattern' => '[a-z]+',
                            ],
                            'nullableDateField' => [
                                'type' => 'string',
                                'nullable' => true,
                                'format' => 'date',
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue764ValidationExpected',\n    'directory' => %s,\n    'validation' => true,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            self::assertFileExists($generatedDirectory . '/Validator/EventConstraint.php');

            $constraintContent = file_get_contents($generatedDirectory . '/Validator/EventConstraint.php');
            self::assertIsString($constraintContent);
            // date properties get a format constraint...
            self::assertStringContainsString('Constraints\\Date(', $constraintContent);
            // ...and empty strings are rejected for pattern and date properties.
            self::assertSame(3, substr_count($constraintContent, 'Constraints\\NotBlank('));

            $this->requireGeneratedClasses($generatedDirectory);

            $modelClass = 'Jane\Component\OpenApi3\Tests\Issue764ValidationExpected\Model\Event';
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue764ValidationExpected\Normalizer\EventNormalizer');
            $validationExceptionClass = 'Jane\Component\OpenApi3\Tests\Issue764ValidationExpected\Runtime\Normalizer\ValidationException';

            $normalizer = new $normalizerClass();

            foreach ([
                ['dateField' => '', 'patternField' => 'abc'],
                ['dateField' => '2026-08-24', 'patternField' => ''],
                ['dateField' => '', 'patternField' => '', 'nullableDateField' => null],
            ] as $invalidPayload) {
                $thrown = null;

                try {
                    $normalizer->denormalize($invalidPayload, $modelClass, 'json');
                } catch (\Throwable $e) {
                    $thrown = $e;
                }

                self::assertNotNull($thrown, \sprintf('Expected a ValidationException for payload: %s', json_encode($invalidPayload)));
                self::assertInstanceOf($validationExceptionClass, $thrown);
            }

            $object = $normalizer->denormalize([
                'dateField' => '2026-08-24',
                'patternField' => 'abc',
                'nullableDateField' => null,
            ], $modelClass, 'json');

            self::assertInstanceOf(\DateTime::class, $object->getDateField());
            self::assertNull($object->getNullableDateField());
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
