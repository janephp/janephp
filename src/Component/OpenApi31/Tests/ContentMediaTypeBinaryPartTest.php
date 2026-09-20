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
 * OpenAPI 3.0 spells a binary payload `type: string, format: binary`; OpenAPI
 * 3.1 (JSON Schema 2020-12) dropped that spelling in favour of
 * `type: string, contentMediaType: <media type>`. The multipart generator only
 * recognised the 3.0 spelling, so a 3.1 file part was emitted without any
 * `$partOptions` entry and therefore went on the wire with no `filename`.
 *
 * @see https://github.com/janephp/janephp/issues/1036
 */
class ContentMediaTypeBinaryPartTest extends TestCase
{
    public function testContentMediaTypePropertyIsSentAsAFilePart(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([
            'file' => ['type' => 'string', 'contentMediaType' => 'application/octet-stream'],
            'label' => ['type' => 'string'],
        ]);

        try {
            $endpoint = $this->read($generatedDirectory . '/Endpoint/UploadFile.php');

            self::assertStringContainsString("\$partOptions = ['file' => ['filename' => 'file']];", $endpoint);
            self::assertStringContainsString('$bodyBuilder->addResource($key, $value, $resourceOptions);', $endpoint);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testConcreteContentMediaTypePropertyIsSentAsAFilePart(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([
            'file' => ['type' => 'string', 'contentMediaType' => 'application/pdf'],
            'label' => ['type' => 'string'],
        ]);

        try {
            self::assertStringContainsString(
                "\$partOptions = ['file' => ['filename' => 'file']];",
                $this->read($generatedDirectory . '/Endpoint/UploadFile.php')
            );
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testFilenameComposesWithThePartContentTypeFromEncoding(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient(
            [
                'file' => ['type' => 'string', 'contentMediaType' => 'application/octet-stream'],
                'label' => ['type' => 'string'],
            ],
            ['file' => ['contentType' => 'application/pdf']]
        );

        try {
            self::assertStringContainsString(
                "\$partOptions = ['file' => ['filename' => 'file', 'headers' => ['Content-Type' => 'application/pdf']]];",
                $this->read($generatedDirectory . '/Endpoint/UploadFile.php')
            );
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testPlainStringPropertiesAreNotSentAsFileParts(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient([
            'label' => ['type' => 'string'],
        ]);

        try {
            $endpoint = $this->read($generatedDirectory . '/Endpoint/UploadFile.php');

            self::assertStringNotContainsString('$partOptions', $endpoint);
            self::assertStringContainsString('$bodyBuilder->addResource($key, $value);', $endpoint);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @param array<string, array<string, string>>           $properties
     * @param array<string, array{contentType: string}>|null $encoding
     *
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(array $properties, ?array $encoding = null): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-content-media-type-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $mediaType = ['schema' => ['$ref' => '#/components/schemas/UploadRequest']];
        if (null !== $encoding) {
            $mediaType['encoding'] = $encoding;
        }

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Upload API', 'version' => '1.0.0'],
            'paths' => [
                '/upload' => [
                    'post' => [
                        'operationId' => 'uploadFile',
                        'requestBody' => [
                            'required' => true,
                            'content' => ['multipart/form-data' => $mediaType],
                        ],
                        'responses' => ['201' => ['description' => 'Created']],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'UploadRequest' => [
                        'type' => 'object',
                        'required' => \array_slice(array_keys($properties), 0, 1),
                        'properties' => $properties,
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi31\Tests\ContentMediaTypeExpected',
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

    private function read(string $path): string
    {
        self::assertFileExists($path);

        return (string) file_get_contents($path);
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
