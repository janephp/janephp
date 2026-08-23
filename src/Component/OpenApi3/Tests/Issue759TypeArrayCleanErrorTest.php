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
 * @see https://github.com/janephp/janephp/issues/759
 */
class Issue759TypeArrayCleanErrorTest extends TestCase
{
    public function testTypeArrayIn30SpecFailsWithCleanErrorInsteadOfTypeError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue759-error-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'paths' => [],
            'components' => [
                'schemas' => [
                    'Pet' => [
                        'type' => 'object',
                        'properties' => [
                            'status' => [
                                'type' => ['string', 'null'],
                            ],
                            'name' => [
                                'type' => ['string', 'null'],
                            ],
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
            $this->assertStringContainsString('/components/schemas/Pet/properties/status/type', $rendered);
            $this->assertStringContainsString('/components/schemas/Pet/properties/name/type', $rendered);
            $this->assertStringContainsString('jane-php/open-api-3-1', $rendered);
            $this->assertStringNotContainsString('TypeError', $rendered);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testSameSpecWith30NullableSyntaxStillGenerates(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue759-ok-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Test',
                'version' => '1.0.0',
            ],
            'paths' => [],
            'components' => [
                'schemas' => [
                    'Pet' => [
                        'type' => 'object',
                        'properties' => [
                            'status' => [
                                'type' => 'string',
                                'nullable' => true,
                            ],
                        ],
                    ],
                    // GeoJSON style schemas declare a "type" property whose
                    // value is a regular schema object, not a type array
                    'Point' => [
                        'type' => 'object',
                        'required' => ['type'],
                        'properties' => [
                            'type' => [
                                'type' => 'string',
                                'enum' => ['Point'],
                            ],
                            'coordinates' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'number',
                                ],
                            ],
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
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function createConfigFile(string $fixtureDirectory): string
    {
        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue759Generated',\n    'directory' => %s,\n];\n",
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
