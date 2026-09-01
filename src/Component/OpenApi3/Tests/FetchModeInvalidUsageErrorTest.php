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
 * Ensures x-fetch-mode misuses fail generation with clean, complete errors
 * instead of being silently ignored (ADR 0002 + ADR 0011).
 */
class FetchModeInvalidUsageErrorTest extends TestCase
{
    public function testFetchModeOnMutatingOperationFailsWithCleanError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-fetch-mode-error-' . bin2hex(random_bytes(8));
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
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                    'post' => [
                        'operationId' => 'createPet',
                        'x-fetch-mode' => 'lazy',
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                    'put' => [
                        'operationId' => 'updatePet',
                        'x-fetch-mode' => 'sometimes',
                        'responses' => [
                            '200' => ['description' => 'Ok'],
                        ],
                    ],
                    'head' => [
                        'operationId' => 'headPets',
                        'x-fetch-mode' => 'deferred',
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
            // every violation is reported with its exact location, in one run
            $this->assertStringContainsString('/paths/~1pets/post/x-fetch-mode', $rendered);
            $this->assertStringContainsString('/paths/~1pets/put/x-fetch-mode', $rendered);
            $this->assertStringContainsString('/paths/~1pets/head/x-fetch-mode', $rendered);
            $this->assertStringContainsString('only supported on GET and HEAD operations', $rendered);
            $this->assertStringContainsString('"lazy", "eager" or "preload"', $rendered);
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
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\FetchModeGenerated',\n    'directory' => %s,\n];\n",
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
