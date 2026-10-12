<?php

namespace Jane\Component\OpenApi2\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * An operation-level `security` replaces the top-level one, and an empty list
 * (`[]`) removes it.
 *
 * @see https://github.com/janephp/janephp/issues/1112
 */
class Issue1112RegressionTest extends TestCase
{
    public function testOperationSecurityOverridesTheGlobalSecurity(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi2-issue1112-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $ok = ['200' => ['description' => 'Ok']];
        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'swagger' => '2.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'security' => [['bearer' => []]],
            'securityDefinitions' => [
                'bearer' => ['type' => 'apiKey', 'in' => 'header', 'name' => 'Authorization'],
                'apiKey' => ['type' => 'apiKey', 'in' => 'header', 'name' => 'X-Api-Key'],
            ],
            'paths' => [
                '/public' => ['get' => ['operationId' => 'getPublic', 'security' => [], 'responses' => $ok]],
                // Swagger 2.0 does not describe an empty requirement `{}`. This asserts Jane's behaviour
                // (no scopes), consistent with OpenAPI 3.x where `{}` makes security optional.
                '/anonymous' => ['get' => ['operationId' => 'getAnonymous', 'security' => [new \stdClass()], 'responses' => $ok]],
                '/key-only' => ['get' => ['operationId' => 'getKeyOnly', 'security' => [['apiKey' => []]], 'responses' => $ok]],
                '/default' => ['get' => ['operationId' => 'getDefault', 'responses' => $ok]],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi2\\\\Tests\\\\Issue1112Generated',\n    'directory' => %s,\n];\n",
            var_export($fixtureDirectory . '/openapi.json', true),
            var_export($fixtureDirectory . '/generated', true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());
            $this->assertSame('[]', $this->authenticationScopes($fixtureDirectory, 'GetPublic'));
            $this->assertSame('[]', $this->authenticationScopes($fixtureDirectory, 'GetAnonymous'));
            $this->assertSame("['apiKey']", $this->authenticationScopes($fixtureDirectory, 'GetKeyOnly'));
            $this->assertSame("['bearer']", $this->authenticationScopes($fixtureDirectory, 'GetDefault'));
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function authenticationScopes(string $fixtureDirectory, string $endpoint): string
    {
        $content = file_get_contents($fixtureDirectory . '/generated/Endpoint/' . $endpoint . '.php');
        $this->assertIsString($content);
        $this->assertSame(1, preg_match('/function getAuthenticationScopes\(\): array\s*\{\s*return (\[[^\]]*\]);/', $content, $matches));

        return $matches[1];
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
