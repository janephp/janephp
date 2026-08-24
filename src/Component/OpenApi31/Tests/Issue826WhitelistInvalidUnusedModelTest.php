<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * @see https://github.com/janephp/janephp/issues/826
 */
class Issue826WhitelistInvalidUnusedModelTest extends TestCase
{
    public function testGenerationSucceedsWhenInvalidSchemaIsNotUsedByWhitelistedPaths(): void
    {
        $fixtureDirectory = $this->createFixtureDirectory();

        try {
            [$generatedDirectory, $returnCode, $output] = $this->runGenerateCommand($fixtureDirectory, true);

            self::assertSame(Command::SUCCESS, $returnCode, $output->fetch());
            self::assertFileExists($generatedDirectory . '/Model/Simple.php');
            self::assertFileDoesNotExist($generatedDirectory . '/Model/BrokenStats.php');

            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetSimple.php');
            self::assertIsString($endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testGenerationFailsWhenInvalidSchemaIsNeeded(): void
    {
        $fixtureDirectory = $this->createFixtureDirectory();

        try {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('an allOf instruction with 2 or more types is strictly impossible, check your schema');

            $this->runGenerateCommand($fixtureDirectory, false);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return array{0: string, 1: int, 2: BufferedOutput} The generated directory, the command return code and the command output
     */
    private function runGenerateCommand(string $fixtureDirectory, bool $whitelistedPaths): array
    {
        $generatedDirectory = $fixtureDirectory . '/generated';
        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 826',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/simple' => [
                    'get' => [
                        'operationId' => 'getSimple',
                        'responses' => [
                            '200' => [
                                'description' => 'successful operation',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/Simple',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '/broken' => [
                    'get' => [
                        'operationId' => 'getBroken',
                        'responses' => [
                            '200' => [
                                'description' => 'successful operation',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/BrokenStats',
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
                    'Simple' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => ['type' => 'string'],
                        ],
                    ],
                    'BrokenStats' => [
                        'type' => 'object',
                        'properties' => [
                            'count' => [
                                'allOf' => [
                                    [
                                        'type' => 'string',
                                        'format' => 'date',
                                    ],
                                    [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'minimum' => 0,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $config = [
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi31\Tests\Issue826Expected',
            'directory' => $generatedDirectory,
        ];

        if ($whitelistedPaths) {
            $config['whitelisted-paths'] = [['\/simple']];
        }

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export($config, true) . ';' . "\n");

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        $returnCode = $command->execute($input, $output);

        return [$generatedDirectory, $returnCode, $output];
    }

    private function createFixtureDirectory(): string
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-826-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        return $fixtureDirectory;
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
