<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue833RegressionTest extends TestCase
{
    public function testGenerationToleratesEmptyContentMapOn200Response(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-833-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 833',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/api-url' => [
                    'get' => [
                        // No operationId: naming falls through to OperationUrlNaming, which
                        // is where issue #833 crashed.
                        'responses' => [
                            '200' => [
                                'description' => 'No Content',
                                // Encoded as "content": {}: the map exists but documents no media type,
                                // which used to fatally error in OperationUrlNaming ("Call to a member
                                // function getSchema() on null").
                                'content' => new \stdClass(),
                            ],
                        ],
                    ],
                ],
            ],
            'components' => ['schemas' => new \stdClass()],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue833Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            self::assertFileExists($generatedDirectory . '/Endpoint/GetApiUrl.php');

            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetApiUrl.php');
            self::assertIsString($endpointContent);
            // The 200 response has no media type, so nothing is deserialized: the generated
            // transformation must treat it as a body-less response returning null.
            self::assertStringContainsString('200 === $status', $endpointContent);
            self::assertStringNotContainsString('$serializer->deserialize(', $endpointContent);
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
