<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1126RegressionTest extends TestCase
{
    /**
     * A model built with allOf on a discriminated subtype must pass validation
     * only when keys required by the parent schema are present. Before the
     * fix, the validator of an allOf schema only knew its top-level required
     * keys, so inherited ones (or ones declared inside an allOf member) were
     * Optional: a payload missing them was accepted but then fatally errored
     * with "Typed property ... must not be accessed before initialization".
     */
    public function testValidationRejectsPayloadMissingParentRequiredProperty(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-1126-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 1126',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/pets' => [
                    'get' => [
                        'operationId' => 'listPets',
                        'responses' => [
                            '200' => [
                                'description' => 'A pet',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/Pet',
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
                    'Pet' => [
                        'type' => 'object',
                        'required' => ['name'],
                        'discriminator' => [
                            'propertyName' => 'petType',
                            'mapping' => [
                                'cat' => '#/components/schemas/Cat',
                            ],
                        ],
                        'properties' => [
                            'petType' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'birthDate' => [
                                'type' => 'string',
                                'format' => 'date',
                            ],
                        ],
                    ],
                    'Cat' => [
                        'allOf' => [
                            [
                                '$ref' => '#/components/schemas/Pet',
                            ],
                            [
                                'type' => 'object',
                                'required' => ['whiskers'],
                                'properties' => [
                                    'whiskers' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Base' => [
                        'type' => 'object',
                        'required' => ['id'],
                        'properties' => [
                            'id' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Thing' => [
                        'allOf' => [
                            [
                                '$ref' => '#/components/schemas/Base',
                            ],
                            [
                                'type' => 'object',
                                'properties' => [
                                    'label' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue1126Expected',\n    'directory' => %s,\n    'validation' => true,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            self::assertFileExists($generatedDirectory . '/Validator/CatConstraint.php');

            $constraintContent = file_get_contents($generatedDirectory . '/Validator/CatConstraint.php');
            self::assertIsString($constraintContent);
            // 'name' is required by the parent schema Pet: the subtype's
            // validator must mark it Required, not Optional.
            self::assertStringContainsString(
                '\'name\' => new \\Symfony\\Component\\Validator\\Constraints\\Required(',
                $constraintContent
            );
            self::assertStringNotContainsString(
                '\'name\' => new \\Symfony\\Component\\Validator\\Constraints\\Optional(',
                $constraintContent
            );
            // Required keys declared inside an allOf member apply as well.
            self::assertStringContainsString(
                '\'whiskers\' => new \\Symfony\\Component\\Validator\\Constraints\\Required(',
                $constraintContent
            );

            // Same for a plain allOf over a non-discriminated parent.
            $thingConstraintContent = file_get_contents($generatedDirectory . '/Validator/ThingConstraint.php');
            self::assertIsString($thingConstraintContent);
            self::assertStringContainsString(
                '\'id\' => new \\Symfony\\Component\\Validator\\Constraints\\Required(',
                $thingConstraintContent
            );

            $this->requireGeneratedClasses($generatedDirectory);

            $modelClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue1126Expected\Model\Cat');
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue1126Expected\Normalizer\CatNormalizer');
            $validationExceptionClass = 'Jane\Component\OpenApi3\Tests\Issue1126Expected\Runtime\Normalizer\ValidationException';

            $normalizer = new $normalizerClass();

            // A payload missing 'name' used to pass validation and later
            // fatally error when reading the uninitialized typed property.
            $thrown = null;

            try {
                $normalizer->denormalize([
                    'petType' => 'cat',
                    'whiskers' => true,
                ], $modelClass, 'json');
            } catch (\Throwable $e) {
                $thrown = $e;
            }

            self::assertNotNull($thrown, 'Expected a ValidationException for a payload missing the parent-required "name" key.');
            self::assertInstanceOf($validationExceptionClass, $thrown);

            $object = $normalizer->denormalize([
                'petType' => 'cat',
                'name' => 'Fluffy',
                'whiskers' => true,
            ], $modelClass, 'json');

            self::assertInstanceOf($modelClass, $object);
            self::assertSame('Fluffy', $object->name);
            self::assertTrue($object->whiskers);
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
         * the ones whose dependencies are not loaded yet. From the second pass on, use plain
         * `require`: a file included with `require_once` stays marked as loaded even when it
         * threw, so a repeated `require_once` would silently do nothing and the class would
         * never get defined.
         */
        $pending = $files;
        $firstPass = true;
        while ([] !== $pending) {
            $deferred = [];

            foreach ($pending as $file) {
                try {
                    if ($firstPass) {
                        require_once $file;
                    } else {
                        require $file;
                    }
                } catch (\Error $error) {
                    $deferred[] = $file;
                }
            }

            if (\count($deferred) === \count($pending)) {
                // No progress: a real broken dependency, rethrow the actual error.
                require $pending[0];
            }

            $pending = $deferred;
            $firstPass = false;
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
