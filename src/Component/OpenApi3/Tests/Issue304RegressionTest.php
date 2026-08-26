<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue304RegressionTest extends TestCase
{
    public function testExceptionCarriesDeserializedBodyForAnyOfReferenceErrorResponse(): void
    {
        $fixtureDirectory = $this->generate([
            'openapi' => '3.0.0',
            'info' => [
                'title' => 'Issue 304',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/test' => [
                    'get' => [
                        'operationId' => 'GetTest',
                        'responses' => [
                            '400' => [
                                'description' => 'Error payload described by an anyOf union',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            '$ref' => '#/components/schemas/ErrorMessage',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'ErrorMessage' => [
                        'anyOf' => [
                            ['$ref' => '#/components/schemas/ErrorMessageOne'],
                            ['$ref' => '#/components/schemas/ErrorMessageTwo'],
                        ],
                    ],
                    'ErrorMessageOne' => [
                        'type' => 'object',
                        'properties' => [
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'message' => ['type' => 'string'],
                                        'code' => ['type' => 'integer'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'ErrorMessageTwo' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => ['type' => 'string'],
                            'MessageDetail' => ['type' => 'integer'],
                        ],
                    ],
                ],
            ],
        ]);

        try {
            $endpointContent = file_get_contents($fixtureDirectory . '/generated/Endpoint/GetTest.php');
            self::assertIsString($endpointContent);
            // The 400 response schema resolves to an anyOf union: the generated transformation
            // must deserialize the body into the first branch model and hand it to the exception,
            // instead of the historical bare `throw new ...Exception($response);`.
            self::assertStringContainsString(
                'throw new \Jane\Component\OpenApi3\Tests\Issue304Expected\Exception\GetTestBadRequestException('
                . "\$serializer->deserialize(\$body, 'Jane\Component\OpenApi3\Tests\Issue304Expected\Model\ErrorMessageOne', 'json'), \$response);",
                $endpointContent
            );
            self::assertStringNotContainsString('GetTestBadRequestException($response)', $endpointContent);

            $exceptionContent = file_get_contents($fixtureDirectory . '/generated/Exception/GetTestBadRequestException.php');
            self::assertIsString($exceptionContent);
            self::assertStringContainsString('Model\ErrorMessageOne $errorMessageOne', $exceptionContent);
            self::assertStringContainsString(
                'public function getErrorMessageOne(): \Jane\Component\OpenApi3\Tests\Issue304Expected\Model\ErrorMessageOne',
                $exceptionContent
            );

            self::assertFileExists($fixtureDirectory . '/generated/Model/ErrorMessageOne.php');
            self::assertFileExists($fixtureDirectory . '/generated/Model/ErrorMessageTwo.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testExceptionCarriesDeserializedBodyForInlineAnyOfErrorResponse(): void
    {
        $fixtureDirectory = $this->generate([
            'openapi' => '3.0.0',
            'info' => [
                'title' => 'Issue 304 inline',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/test-inline' => [
                    'get' => [
                        'operationId' => 'TestInline',
                        'responses' => [
                            '400' => [
                                'description' => 'Error payload described by an inline anyOf union',
                                'content' => [
                                    'application/json' => [
                                        'schema' => [
                                            'anyOf' => [
                                                [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'message' => ['type' => 'string'],
                                                    ],
                                                ],
                                                [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'detail' => ['type' => 'string'],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        try {
            $endpointContent = file_get_contents($fixtureDirectory . '/generated/Endpoint/TestInline.php');
            self::assertIsString($endpointContent);
            self::assertStringNotContainsString('TestInlineBadRequestException($response)', $endpointContent);
            self::assertSame(
                1,
                preg_match(
                    '/TestInlineBadRequestException\(\$serializer->deserialize\(\$body, \'([^\']+)\', \'json\'\), \$response\)/',
                    $endpointContent,
                    $matches
                )
            );
            self::assertStringStartsWith('Jane\Component\OpenApi3\Tests\Issue304Expected\Model\\', $matches[1]);

            self::assertFileExists($fixtureDirectory . '/generated/Exception/TestInlineBadRequestException.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function generate(array $openApi): string
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-304-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode($openApi, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue304Expected',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $command->execute($input, new NullOutput());

        return $fixtureDirectory;
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
