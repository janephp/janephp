<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * `whitelisted-paths` keeps the models a whitelisted operation needs. The
 * request body of a `multipart/form-data` operation used to be left out of
 * that closure, so its model was pruned and the endpoint fell back to
 * `\stdClass` — which `JaneObjectNormalizer` cannot serialize.
 *
 * @see https://github.com/janephp/janephp/issues/1066
 */
class WhitelistedPathsMultipartBodyTest extends TestCase
{
    public function testMultipartRequestBodyOfAWhitelistedOperationIsGenerated(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient();

        try {
            self::assertFileExists($generatedDirectory . '/Model/UploadBody.php');
            self::assertFileExists($generatedDirectory . '/Normalizer/UploadBodyNormalizer.php');
            self::assertFileExists($generatedDirectory . '/Model/Receipt.php');
            // the other operation's models are still pruned
            self::assertFileDoesNotExist($generatedDirectory . '/Model/WidgetPayload.php');

            $endpoint = file_get_contents($generatedDirectory . '/Endpoint/Upload.php');
            self::assertStringContainsString('Model\UploadBody $requestBody', $endpoint);
            self::assertStringNotContainsString('\stdClass $requestBody', $endpoint);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-whitelisted-multipart-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $ref = static fn (string $name): array => ['$ref' => '#/components/schemas/' . $name];
        $jsonResponse = static fn (string $name): array => [
            'description' => $name,
            'content' => ['application/json' => ['schema' => $ref($name)]],
        ];

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.3',
            'info' => ['title' => 'Whitelisted multipart', 'version' => '1.0.0'],
            'paths' => [
                '/upload' => [
                    'post' => [
                        'operationId' => 'upload',
                        'requestBody' => [
                            'required' => true,
                            'content' => ['multipart/form-data' => ['schema' => $ref('UploadBody')]],
                        ],
                        'responses' => ['200' => $jsonResponse('Receipt')],
                    ],
                ],
                '/widgets' => [
                    'post' => [
                        'operationId' => 'createWidget',
                        'requestBody' => [
                            'required' => true,
                            'content' => ['application/json' => ['schema' => $ref('WidgetPayload')]],
                        ],
                        'responses' => ['200' => $jsonResponse('Receipt')],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'UploadBody' => [
                        'type' => 'object',
                        'required' => ['file'],
                        'properties' => ['file' => ['type' => 'string'], 'label' => ['type' => 'string']],
                    ],
                    'WidgetPayload' => ['type' => 'object', 'properties' => ['name' => ['type' => 'string']]],
                    'Receipt' => ['type' => 'object', 'properties' => ['id' => ['type' => 'string']]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi3\Tests\WhitelistedMultipartExpected',
            'directory' => $generatedDirectory,
            'whitelisted-paths' => ['\/upload$'],
        ], true) . ';' . "\n");

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
