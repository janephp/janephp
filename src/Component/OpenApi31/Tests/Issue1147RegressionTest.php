<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\JsonSchema\Generator\ValidationOption;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1147RegressionTest extends TestCase
{
    /**
     * The `validation` option accepts a `ValidationOption` case (the default
     * `false` disables validation entirely and is covered by the fixtures
     * without a `validation` key): NormalizeOnly emits the `$this->validate()`
     * call only in the generated `normalize()` (the API-client use case),
     * DenormalizeOnly only in the generated `denormalize()`, Both in both
     * directions (the historical `true`). Validators and their constraints are
     * generated in every case, and for a spec using `additionalProperties: false`
     * (serving here as both request body and response) a payload with an extra
     * key, or a model carrying an out-of-range property, is rejected in every
     * direction where validation actually runs.
     */
    public static function validationOptionProvider(): \Generator
    {
        yield 'NormalizeOnly validates on normalization only' => [ValidationOption::NormalizeOnly, true, false];
        yield 'DenormalizeOnly validates on denormalization only' => [ValidationOption::DenormalizeOnly, false, true];
        yield 'Both validates in both directions' => [ValidationOption::Both, true, true];
    }

    #[DataProvider('validationOptionProvider')]
    public function testGeneratedValidationFollowsTheValidationOption(ValidationOption $validation, bool $expectedNormalization, bool $expectedDenormalization): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1147-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        $namespace = 'Jane\Component\OpenApi31\Tests\Issue1147Expected' . bin2hex(random_bytes(4));
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 1147',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/pets' => [
                    'post' => [
                        'operationId' => 'createPet',
                        'requestBody' => [
                            'required' => true,
                            'content' => [
                                'application/json' => [
                                    'schema' => [
                                        '$ref' => '#/components/schemas/Pet',
                                    ],
                                ],
                            ],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'The created pet',
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
                        'additionalProperties' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'age' => [
                                'type' => 'integer',
                                'minimum' => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => %s,\n    'directory' => %s,\n    'validation' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($namespace, true),
            var_export($generatedDirectory, true),
            var_export($validation, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            // Constraints are generated in every enabled mode.
            self::assertFileExists($generatedDirectory . '/Validator/PetConstraint.php');

            $normalizerContent = file_get_contents($generatedDirectory . '/Normalizer/PetNormalizer.php');
            self::assertIsString($normalizerContent);
            self::assertSame($expectedNormalization, $this->methodValidates($normalizerContent, 'normalize'), 'Unexpected $this->validate() usage in the generated normalize() method.');
            self::assertSame($expectedDenormalization, $this->methodValidates($normalizerContent, 'denormalize'), 'Unexpected $this->validate() usage in the generated denormalize() method.');

            $this->requireGeneratedClasses($generatedDirectory);

            $modelClass = self::widenedClassName($namespace . '\Model\Pet');
            /** @var class-string */
            $normalizerClass = self::widenedClassName($namespace . '\Normalizer\PetNormalizer');
            $validationExceptionClass = self::widenedClassName($namespace . '\Runtime\Normalizer\ValidationException');

            $normalizer = new $normalizerClass();

            // A payload with an extra key violates `additionalProperties: false`.
            $denormalizeExtraKey = static function () use ($normalizer, $modelClass) {
                return $normalizer->denormalize(['name' => 'Kess', 'pet' => 'random'], $modelClass, 'json');
            };
            if ($expectedDenormalization) {
                $this->assertValidationException($validationExceptionClass, $denormalizeExtraKey);
            } else {
                $object = $denormalizeExtraKey();
                self::assertInstanceOf($modelClass, $object);
                self::assertSame('Kess', $object->name);
            }

            // A model carrying an out-of-range `age` (schema declares `minimum: 1`)
            // violates the generated constraint.
            $model = $normalizer->denormalize(['name' => 'Kess'], $modelClass, 'json');
            $model->age = 0;
            $normalizeOutOfRange = static function () use ($normalizer, $model) {
                return $normalizer->normalize($model, null);
            };
            if ($expectedNormalization) {
                $this->assertValidationException($validationExceptionClass, $normalizeOutOfRange);
            } else {
                $normalized = $normalizeOutOfRange();
                self::assertIsArray($normalized);
                self::assertSame(0, $normalized['age']);
            }
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function assertValidationException(string $validationExceptionClass, callable $call): void
    {
        $thrown = null;

        try {
            $call();
        } catch (\Throwable $error) {
            $thrown = $error;
        }

        self::assertNotNull($thrown, 'Expected a ValidationException.');
        self::assertInstanceOf($validationExceptionClass, $thrown);
    }

    private function methodValidates(string $generatedCode, string $method): bool
    {
        $start = strpos($generatedCode, 'public function ' . $method . '(');
        self::assertNotFalse($start, 'The generated normalizer has no ' . $method . '() method.');

        $nextMethod = strpos($generatedCode, 'public function ', $start + 1);
        $bodyEnd = false === $nextMethod ? \strlen($generatedCode) : $nextMethod;
        $body = substr($generatedCode, $start, $bodyEnd - $start);

        return str_contains($body, '$this->validate(');
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
