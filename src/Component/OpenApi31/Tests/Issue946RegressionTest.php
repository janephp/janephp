<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue946RegressionTest extends TestCase
{
    public function testInlineResponseSchemasGenerateModelsAndDeserialization(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-946-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 946',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/my/api/endpoint/' => [
                    'get' => [
                        'operationId' => 'listEntities',
                        'responses' => [
                            '200' => [
                                'description' => 'lorem ipsum',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'id' => [
                                                        'type' => 'string',
                                                        'format' => 'uuid',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '/my/api/endpoint/{id}' => [
                    'get' => [
                        'operationId' => 'getEntity',
                        'parameters' => [
                            [
                                'name' => 'id',
                                'required' => true,
                                'in' => 'path',
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'lorem ipsum',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'id' => [
                                                    'type' => 'string',
                                                    'format' => 'uuid',
                                                ],
                                                'someField' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'components' => ['schemas' => new \stdClass()],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi31\\\\Tests\\\\Issue946Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            self::assertFileExists($generatedDirectory . '/Model/MyApiEndpointGetResponse200Item.php');
            self::assertFileExists($generatedDirectory . '/Model/MyApiEndpointIdGetResponse200.php');

            $listEndpointContent = file_get_contents($generatedDirectory . '/Endpoint/ListEntities.php');
            self::assertIsString($listEndpointContent);
            self::assertStringContainsString(
                '$serializer->deserialize($body, \'Jane\Component\OpenApi31\Tests\Issue946Expected\Model\MyApiEndpointGetResponse200Item[]\', \'json\')',
                $listEndpointContent
            );
            self::assertStringContainsString(
                '@return null|\Jane\Component\OpenApi31\Tests\Issue946Expected\Model\MyApiEndpointGetResponse200Item[]',
                $listEndpointContent
            );

            $getEndpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetEntity.php');
            self::assertIsString($getEndpointContent);
            self::assertStringNotContainsString('return json_decode($body);', $getEndpointContent);
            self::assertStringContainsString(
                '$serializer->deserialize($body, \'Jane\Component\OpenApi31\Tests\Issue946Expected\Model\MyApiEndpointIdGetResponse200\', \'json\')',
                $getEndpointContent
            );
            self::assertStringContainsString(
                '@return null|\Jane\Component\OpenApi31\Tests\Issue946Expected\Model\MyApiEndpointIdGetResponse200',
                $getEndpointContent
            );
        } finally {
            $this->removeDirectory($fixtureDirectory);
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
