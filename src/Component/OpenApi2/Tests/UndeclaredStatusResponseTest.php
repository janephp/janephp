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
 * A response status the specification does not declare must not fall out of
 * transformResponseBody() as an implicit null.
 *
 * @see https://github.com/janephp/janephp/issues/377
 * @see https://github.com/janephp/janephp/issues/815
 * @see https://github.com/janephp/janephp/issues/1066
 */
class UndeclaredStatusResponseTest extends TestCase
{
    public function testAnUndeclaredStatusThrowsByDefault(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([]);

        try {
            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetPet.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString(
                "throw new \\Jane\\Component\\OpenApi2\\Tests\\UndeclaredStatusExpected\\Exception\\BadResponseException(\$status, \$body, \$response);\n    }",
                $endpointContent
            );
            self::assertStringContainsString('@throws \Jane\Component\OpenApi2\Tests\UndeclaredStatusExpected\Exception\BadResponseException', $endpointContent);
            self::assertStringContainsString("@return \\Jane\\Component\\OpenApi2\\Tests\\UndeclaredStatusExpected\\Model\\Pet\n", $endpointContent);
            self::assertFileExists($generatedDirectory . '/Exception/BadResponseException.php');
            self::assertFileExists($generatedDirectory . '/Exception/UnexpectedStatusCodeException.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testAnUndeclaredStatusReturnsAnExplicitNullWhenThrowingIsSwitchedOff(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient(['throw-unexpected-status-code' => false]);

        try {
            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetPet.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString("        return null;\n    }", $endpointContent);
            self::assertStringNotContainsString('BadResponseException', $endpointContent);
            self::assertStringContainsString("@return null|\\Jane\\Component\\OpenApi2\\Tests\\UndeclaredStatusExpected\\Model\\Pet\n", $endpointContent);
            self::assertFileDoesNotExist($generatedDirectory . '/Exception/BadResponseException.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * When no declared response yields a value (here: only an error response
     * is declared), the docblock falls back to the `mixed` of the abstract
     * method instead of an empty `@return`.
     */
    public function testTheReturnTypeFallsBackToMixedWhenNoResponseYieldsAValue(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([], false, false);

        try {
            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetPet.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString("     * @return mixed\n     */\n    protected function transformResponseBody(", $endpointContent);
            self::assertStringContainsString("throw new \\Jane\\Component\\OpenApi2\\Tests\\UndeclaredStatusExpected\\Exception\\BadResponseException(\$status, \$body, \$response);\n    }", $endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * A `default` response without a schema already closes the chain with an
     * unconditional return: nothing is appended after it.
     */
    public function testNothingIsAppendedAfterASchemaLessDefaultResponse(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([], true);

        try {
            $endpointContent = file_get_contents($generatedDirectory . '/Endpoint/GetPet.php');
            self::assertIsString($endpointContent);
            self::assertStringContainsString("        return null;\n    }", $endpointContent);
            self::assertStringNotContainsString('BadResponseException', $endpointContent);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @param array<string, mixed> $options
     *
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(array $options, bool $withDefaultResponse = false, bool $withSuccessResponse = true): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi2-undeclared-status-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $responses = [
            '404' => ['description' => 'Not found'],
        ];
        if ($withSuccessResponse) {
            $responses = [
                '200' => [
                    'description' => 'The pet',
                    'schema' => ['$ref' => '#/definitions/Pet'],
                ],
            ] + $responses;
        }
        if ($withDefaultResponse) {
            $responses['default'] = ['description' => 'Anything else'];
        }

        $swaggerFile = $fixtureDirectory . '/swagger.json';
        file_put_contents($swaggerFile, json_encode([
            'swagger' => '2.0',
            'info' => ['title' => 'Undeclared status', 'version' => '1.0.0'],
            'basePath' => '/',
            'paths' => [
                '/pets/{id}' => [
                    'get' => [
                        'operationId' => 'getPet',
                        'produces' => ['application/json'],
                        'parameters' => [
                            ['name' => 'id', 'in' => 'path', 'required' => true, 'type' => 'string'],
                        ],
                        'responses' => $responses,
                    ],
                ],
            ],
            'definitions' => [
                'Pet' => [
                    'type' => 'object',
                    'properties' => ['name' => ['type' => 'string']],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export($options + [
            'openapi-file' => $swaggerFile,
            'namespace' => 'Jane\Component\OpenApi2\Tests\UndeclaredStatusExpected',
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
