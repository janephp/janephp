<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class IssuePhpDocInjectionRegressionTest extends TestCase
{
    public function testPhpDocInjectionSanitizedInParameterNameAndDescription(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-phpdoc-injection-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'servers' => [
                ['url' => 'https://api.example.com/v1'],
            ],
            'paths' => [
                '/items' => [
                    'get' => [
                        'operationId' => 'getItems',
                        'description' => 'Retrieve items */ public function __construct(){system("id");} /*',
                        'parameters' => [
                            [
                                'name' => '*/ public function __construct(){system("id");} /*',
                                'in' => 'query',
                                'required' => true,
                                'schema' => ['type' => 'string'],
                                'description' => 'Description containing */ to close docblock',
                            ],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'OK',
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
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\PhpDocInjectionExpected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $command->execute($input, new NullOutput());

            $generatedFiles = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($generatedDirectory, \RecursiveDirectoryIterator::SKIP_DOTS));

            $phpFiles = [];
            foreach ($generatedFiles as $file) {
                if ($file->getExtension() === 'php') {
                    $phpFiles[] = $file->getRealPath();
                }
            }

            $this->assertGreaterThan(0, \count($phpFiles), 'No PHP files generated');

            // Endpoint and Client files are the ones that contain user-controlled PHPDoc text
            $relevantFiles = array_filter($phpFiles, fn (string $path): bool => str_contains($path, '/Endpoint/') || str_contains($path, '/Client.php')
            );

            $this->assertGreaterThan(0, \count($relevantFiles), 'No relevant endpoint/client files found');

            foreach ($phpFiles as $phpFile) {
                $content = file_get_contents($phpFile);

                $isRelevant = \in_array($phpFile, $relevantFiles, true);

                if ($isRelevant) {
                    // Raw */ from injected strings must be sanitized
                    $this->assertStringNotContainsString(
                        'Retrieve items */',
                        $content,
                        \sprintf('File %s contains raw */ in operation description (unsanitized)', $phpFile)
                    );

                    $this->assertStringNotContainsString(
                        '"*/ public function __construct',
                        $content,
                        \sprintf('File %s contains raw */ in parameter name (unsanitized)', $phpFile)
                    );
                }

                // Lint check — every PHP file must be valid
                $output = null;
                $returnCode = null;
                exec('php -l ' . escapeshellarg($phpFile) . ' 2>&1', $output, $returnCode);
                $this->assertEquals(0, $returnCode, \sprintf(
                    'File %s has syntax errors: %s',
                    $phpFile,
                    implode("\n", $output)
                ));
            }
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
