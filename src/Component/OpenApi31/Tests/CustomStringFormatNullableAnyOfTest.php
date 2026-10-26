<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * A string format mapped through `custom-string-format-mapping` is denormalized from its string value, also when
 * the schema is part of a nullable `anyOf`.
 */
class CustomStringFormatNullableAnyOfTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\CustomStringFormatNullableAnyOfExpected';

    private ?string $fixtureDirectory = null;

    protected function tearDown(): void
    {
        if (null !== $this->fixtureDirectory) {
            $this->removeDirectory($this->fixtureDirectory);
        }
    }

    public function testNullableAnyOfWithCustomStringFormatIsDenormalized(): void
    {
        $serializer = $this->generate();

        $account = $serializer->denormalize(
            [
                'signedUpAt' => '2026-01-01T15:04:05+00:00',
                'emailVerifiedAt' => '2026-01-02T15:04:05+00:00'
            ],
            self::NAMESPACE . '\Model\Account',
            'json'
        );

        self::assertInstanceOf(\DateTimeImmutable::class, $account->signedUpAt);
        self::assertInstanceOf(\DateTimeImmutable::class, $account->emailVerifiedAt);
        self::assertSame('2026-01-02T15:04:05+00:00', $account->emailVerifiedAt->format(\DATE_RFC3339));

        $account = $serializer->denormalize(
            ['signedUpAt' => '2026-01-02T15:04:05+00:00', 'emailVerifiedAt' => null],
            self::NAMESPACE . '\Model\Account',
            'json'
        );

        self::assertNull($account->emailVerifiedAt);
    }

    private function generate(): Serializer
    {
        $this->fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-custom-string-format-' . bin2hex(random_bytes(8));
        $generatedDirectory = $this->fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $this->fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Custom string format in nullable anyOf', 'version' => '1.0.0'],
            'paths' => [
                '/account' => [
                    'get' => [
                        'operationId' => 'getAccount',
                        'responses' => [
                            '200' => [
                                'description' => 'An account',
                                'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Account']]],
                            ],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'Account' => [
                        'type' => 'object',
                        'properties' => [
                            'signedUpAt' => ['$ref' => '#/components/schemas/Datetime_RFC3339'],
                            'emailVerifiedAt' => [
                                'anyOf' => [
                                    ['$ref' => '#/components/schemas/Datetime_RFC3339'],
                                    ['type' => 'null'],
                                ],
                            ],
                        ],
                    ],
                    'Datetime_RFC3339' => ['type' => 'string', 'format' => 'date-time'],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => self::NAMESPACE,
            'directory' => $generatedDirectory,
            'custom-string-format-mapping' => ['date-time' => \DateTimeImmutable::class],
        ], true) . ';');

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $command->execute(new ArrayInput(['--config-file' => $configFile], $command->getDefinition()), new NullOutput());

        $this->requireGeneratedClasses($generatedDirectory);

        $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');

        return new Serializer([new DateTimeNormalizer(), new $normalizerClass()]);
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
        foreach (['Runtime', 'Model', 'Normalizer'] as $directory) {
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
