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
 * @see https://github.com/janephp/janephp/issues/771
 */
class Issue771UnsupportedParameterTypeErrorTest extends TestCase
{
    public function testUnsupportedNonBodyParameterTypeFailsWithCleanError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue771-error-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/pets' => [
                    'get' => [
                        'operationId' => 'listPets',
                        'parameters' => [
                            [
                                'name' => 'since',
                                'in' => 'query',
                                'schema' => [
                                    'type' => 'null',
                                ],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                ],
            ],
            'components' => [
                'parameters' => [
                    'Limit' => [
                        'name' => 'limit',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'float64',
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->createConfigFile($fixtureDirectory);

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $returnCode = $command->execute($input, $output);
            $rendered = $output->fetch();

            $this->assertSame(Command::FAILURE, $returnCode);
            // every violation is reported, not only the first one
            $this->assertStringContainsString('/paths/~1pets/get/parameters/0/schema/type', $rendered);
            $this->assertStringContainsString('/components/parameters/Limit/schema/type', $rendered);
            $this->assertStringContainsString('is not supported for non-body parameters', $rendered);
            $this->assertStringNotContainsString('TypeError', $rendered);
            $this->assertStringNotContainsString('Undefined array key', $rendered);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testObjectTypedQueryParameterStillGenerates(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue771-ok-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/things' => [
                    'get' => [
                        'operationId' => 'listThings',
                        'parameters' => [
                            [
                                'name' => 'filter',
                                'in' => 'query',
                                'style' => 'deepObject',
                                'explode' => true,
                                'schema' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'from' => ['type' => 'string'],
                                        'to' => ['type' => 'string'],
                                    ],
                                ],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->createConfigFile($fixtureDirectory);

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $returnCode = $command->execute($input, $output);
            $rendered = $output->fetch();

            $this->assertSame(Command::SUCCESS, $returnCode, $rendered);
            $this->assertFileExists($fixtureDirectory . '/generated/Endpoint/ListThings.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testMissingTypeWithoutEnumFailsWithCleanError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue771-missing-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/pets' => [
                    'get' => [
                        'operationId' => 'listPets',
                        'parameters' => [
                            [
                                'name' => 'since',
                                'in' => 'query',
                                'schema' => new \stdClass(),
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->createConfigFile($fixtureDirectory);

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $returnCode = $command->execute($input, $output);
            $rendered = $output->fetch();

            $this->assertSame(Command::FAILURE, $returnCode);
            $this->assertStringContainsString('/paths/~1pets/get/parameters/0/schema', $rendered);
            $this->assertStringContainsString('Missing `type` for non-body parameter', $rendered);
            $this->assertStringNotContainsString('TypeError', $rendered);
            $this->assertStringNotContainsString('Undefined array key', $rendered);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function createConfigFile(string $fixtureDirectory): string
    {
        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue771Generated',\n    'directory' => %s,\n];\n",
            var_export($fixtureDirectory . '/openapi.json', true),
            var_export($fixtureDirectory . '/generated', true)
        ));

        return $configFile;
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
