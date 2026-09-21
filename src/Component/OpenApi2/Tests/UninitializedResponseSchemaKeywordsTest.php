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
 * A response schema is denormalized into a `Schema` model that only assigns
 * the keywords the document actually declares, so every typed property the
 * document leaves out stays uninitialized. Deriving the scalar return type of
 * an endpoint must therefore read those keywords defensively: reading them
 * unguarded fatals with "Typed property … must not be accessed before
 * initialization" instead of generating the client.
 */
class UninitializedResponseSchemaKeywordsTest extends TestCase
{
    /**
     * @param array<string, mixed> $responseSchema
     *
     * @dataProvider responseSchemaProvider
     */
    public function testAResponseSchemaOmittingKeywordsStillGeneratesAnEndpoint(array $responseSchema, string $expectedReturnType): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient($responseSchema);

        try {
            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetPayload.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString(' * @return ' . $expectedReturnType . "\n", $endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return iterable<string, array{0: array<string, mixed>, 1: string}>
     */
    public static function responseSchemaProvider(): iterable
    {
        // Neither `type` nor `enum`: `$enum` is never assigned.
        yield 'neither a type nor an enum' => [['description' => 'An untyped payload'], 'null'];
        // `number` without `format`: `$format` is never assigned.
        yield 'a number without a format' => [['type' => 'number'], 'int'];
        // `number` with a `format` but no bounds: `$minimum` is never assigned.
        yield 'a number with a format' => [['type' => 'number', 'format' => 'double'], 'float'];
        // The keywords that are declared still drive the type.
        yield 'a number with a float bound' => [['type' => 'number', 'minimum' => 0.5], 'float'];
        yield 'an enum without a type' => [['enum' => ['alpha', 'beta']], 'string'];
        yield 'a plain string' => [['type' => 'string'], 'string'];
    }

    /**
     * @param array<string, mixed> $responseSchema
     *
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(array $responseSchema): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi2-response-schema-keywords-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $swaggerFile = $fixtureDirectory . '/swagger.json';
        file_put_contents($swaggerFile, json_encode([
            'swagger' => '2.0',
            'info' => ['title' => 'Response schema keywords', 'version' => '1.0.0'],
            'basePath' => '/',
            'paths' => [
                '/payloads/{id}' => [
                    'get' => [
                        'operationId' => 'getPayload',
                        'produces' => ['application/json'],
                        'parameters' => [
                            ['name' => 'id', 'in' => 'path', 'required' => true, 'type' => 'string'],
                        ],
                        'responses' => [
                            '200' => [
                                'description' => 'The payload',
                                'schema' => $responseSchema,
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export([
            'openapi-file' => $swaggerFile,
            'namespace' => 'Jane\Component\OpenApi2\Tests\ResponseSchemaKeywordsExpected',
            'directory' => $generatedDirectory,
        ], true) . ';' . "\n");

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        $returnCode = $command->execute($input, $output);
        $rendered = $output->fetch();

        self::assertSame(Command::SUCCESS, $returnCode, $rendered);

        return [$fixtureDirectory, $generatedDirectory];
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
