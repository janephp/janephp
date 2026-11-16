<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * A parameter whose schema declares "type" as a list (JSON Schema 2020-12,
 * which OpenAPI 3.1 is a superset of) must keep every non-null entry: allowed
 * types, parameter docblocks and path value serialization must consider all
 * of them, not only the first one.
 *
 * @see https://github.com/janephp/janephp/issues/1166
 */
class Issue1166RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1166Generated';

    public function testTypeListKeepsEveryNonNullException(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1166-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [
                '/things/{thingId}' => [
                    'get' => [
                        'operationId' => 'getThing',
                        'parameters' => [
                            [
                                'name' => 'thingId',
                                'in' => 'path',
                                'required' => true,
                                'schema' => ['type' => ['integer', 'string', 'array']],
                            ],
                            [
                                'name' => 'id',
                                'in' => 'query',
                                'required' => true,
                                'schema' => ['type' => ['integer', 'string']],
                            ],
                        ],
                        'responses' => ['200' => ['description' => 'OK']],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $fixtureDirectory . '/generated',
        ], true) . ';');

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        try {
            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $endpointFile = $fixtureDirectory . '/generated/Endpoint/GetThing.php';
            $this->assertFileExists($endpointFile);
            $endpointContents = file_get_contents($endpointFile);

            // The query parameter allows every declared type.
            $this->assertStringContainsString("addAllowedTypes('id', ['int', 'string'])", $endpointContents);
            $this->assertStringContainsString('int|string', $endpointContents);

            // The path parameter documents every declared type and is not
            // coerced: a union-typed value cannot be safely cast.
            $this->assertStringContainsString('int|string|array', $endpointContents);
            $this->assertStringContainsString('rawurlencode($this->thingId)', $endpointContents);
            $this->assertStringNotContainsString('(string) $this->thingId', $endpointContents);
            $this->assertStringNotContainsString("implode(',', \$this->thingId)", $endpointContents);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        foreach (scandir($path) ?: [] as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            is_dir($entryPath) ? $this->removeDirectory($entryPath) : unlink($entryPath);
        }

        rmdir($path);
    }
}
