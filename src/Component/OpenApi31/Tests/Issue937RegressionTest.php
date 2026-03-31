<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue937RegressionTest extends TestCase
{
    public function testClientMethodContainsPathAndQueryParameters(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-937-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'servers' => [
                ['url' => 'https://api.example.com/v1'],
            ],
            'paths' => [
                '/proposals/{proposalId}' => [
                    'get' => [
                        'operationId' => 'getProposal',
                        'parameters' => [
                            [
                                'name' => 'proposalId',
                                'required' => true,
                                'in' => 'path',
                                'schema' => ['type' => 'string'],
                            ],
                            [
                                'name' => 'preview',
                                'required' => true,
                                'in' => 'query',
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'ProjectProposal found',
                                'content' => [
                                    'application/json' => [
                                        'schema' => ['type' => 'string'],
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
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi31\\\\Tests\\\\Issue937Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            $clientContent = file_get_contents($generatedDirectory . '/Client.php');
            self::assertIsString($clientContent);
            self::assertStringContainsString('public function getProposal(', $clientContent);
            self::assertStringContainsString('$proposalId', $clientContent);
            self::assertStringContainsString('array $queryParameters = []', $clientContent);
            self::assertStringContainsString('new \\Jane\\Component\\OpenApi31\\Tests\\Issue937Expected\\Endpoint\\GetProposal($proposalId, $queryParameters)', $clientContent);

            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetProposal.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString("return str_replace(['{proposalId}'], [\$this->proposalId], '/proposals/{proposalId}');", $endpointContent);
            self::assertStringContainsString("\$optionsResolver->setRequired(['preview']);", $endpointContent);
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
