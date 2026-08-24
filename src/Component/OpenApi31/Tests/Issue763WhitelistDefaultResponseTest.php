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
 * @see https://github.com/janephp/janephp/issues/763
 */
class Issue763WhitelistDefaultResponseTest extends TestCase
{
    public function testDefaultResponseModelIsGeneratedWithWhitelistedPaths(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient(true);

        try {
            self::assertFileExists($generatedDirectory . '/Model/Error.php');

            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/CreateToken.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString(
                "deserialize(\$body, 'Jane\\Component\\OpenApi31\\Tests\\Issue763Expected\\Model\\Error', 'json')",
                $endpointContent
            );
            self::assertStringContainsString(
                '@return null|\Jane\Component\OpenApi31\Tests\Issue763Expected\Model\PostDataPostResponse200|\Jane\Component\OpenApi31\Tests\Issue763Expected\Model\Error',
                $endpointContent
            );
            self::assertStringNotContainsString('return json_decode($body);', $endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testDefaultResponseModelIsGeneratedWithoutWhitelistedPaths(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient(false);

        try {
            self::assertFileExists($generatedDirectory . '/Model/Error.php');

            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/CreateToken.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString(
                "deserialize(\$body, 'Jane\\Component\\OpenApi31\\Tests\\Issue763Expected\\Model\\Error', 'json')",
                $endpointContent
            );
            self::assertStringNotContainsString('return json_decode($body);', $endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(bool $whitelistedPaths): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-763-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 763',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/post/data' => [
                    'post' => [
                        'operationId' => 'createToken',
                        'tags' => ['token'],
                        'requestBody' => [
                            'content' => [
                                'application/json' => [
                                    'schema' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'property' => ['type' => 'string'],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'successful operation',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'value' => ['type' => 'string'],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'default' => [
                                '$ref' => '#/components/responses/error',
                            ],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'error' => [
                        'type' => 'object',
                        'properties' => [
                            'error' => ['type' => 'string'],
                        ],
                    ],
                ],
                'responses' => [
                    'error' => [
                        'description' => 'an error response',
                        'content' => [
                            'application/json' => [
                                'schema' => [
                                    '$ref' => '#/components/schemas/error',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $config = [
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi31\Tests\Issue763Expected',
            'directory' => $generatedDirectory,
        ];

        if ($whitelistedPaths) {
            $config['whitelisted-paths'] = [['\/post\/data']];
        }

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export($config, true) . ';' . "\n");

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        $returnCode = $command->execute($input, $output);
        $rendered = $output->fetch();

        self::assertSame(Command::SUCCESS, $returnCode, $rendered);

        return [$fixtureDirectory, $generatedDirectory];
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
