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
 * @see https://github.com/janephp/janephp/issues/565
 */
class Issue565InvalidSecuritySchemeErrorTest extends TestCase
{
    public function testBareSecuritySchemeDefinitionFailsWithCleanError(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue565-error-' . bin2hex(random_bytes(8));
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
                ],
            ],
            // exactly the malformed document from issue #565: the scheme
            // definition is pasted directly under `securitySchemes` instead
            // of being nested under a scheme name
            'components' => [
                'securitySchemes' => [
                    'type' => 'http',
                    'scheme' => 'basic',
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
            // every unusable entry is reported with its exact location
            $this->assertStringContainsString('/components/securitySchemes/type', $rendered);
            $this->assertStringContainsString('/components/securitySchemes/scheme', $rendered);
            $this->assertStringContainsString('map of name => scheme definition', $rendered);
            $this->assertStringNotContainsString('TypeError', $rendered);
            $this->assertStringNotContainsString('Undefined array key', $rendered);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testNamedSecuritySchemeStillGeneratesAuthentication(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue565-ok-' . bin2hex(random_bytes(8));
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
                ],
            ],
            'components' => [
                'securitySchemes' => [
                    'basicAuth' => [
                        'type' => 'http',
                        'scheme' => 'basic',
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

            $this->assertSame(Command::SUCCESS, $returnCode, $output->fetch());
            $this->assertFileExists($fixtureDirectory . '/generated/Authentication/BasicAuthAuthentication.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function createConfigFile(string $fixtureDirectory): string
    {
        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue565Generated',\n    'directory' => %s,\n];\n",
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
