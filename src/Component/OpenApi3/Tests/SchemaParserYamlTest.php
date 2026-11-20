<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\JaneOpenApi;
use Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApi3\SchemaParser\SchemaParser;
use Jane\Component\OpenApiCommon\Exception\CouldNotParseException;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;

/**
 * An OpenAPI document written in YAML is plain data.
 */
class SchemaParserYamlTest extends TestCase
{
    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-openapi3-schema-parser-yaml-' . bin2hex(random_bytes(8));
        (new Filesystem())->mkdir($this->tmpDir);
        SchemaParserYamlProbe::$woken = false;
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testYamlObjectTagIsRejected(): void
    {
        $file = $this->tmpDir . '/openapi.yaml';
        file_put_contents($file, <<<YAML
            openapi: 3.0.2
            info:
              title: Test
              version: 1.0.0
              x-probe: !php/object '{$this->serializedProbe()}'
            paths: {}
            YAML);

        try {
            (new SchemaParser(JaneOpenApi::buildSerializer()))->parseSchema($file);
            self::fail('Expected CouldNotParseException to be thrown');
        } catch (CouldNotParseException $exception) {
            self::assertStringContainsString('YAML error', $exception->getMessage());
        }

        self::assertFalse(SchemaParserYamlProbe::$woken);
    }

    public function testPlainYamlStillParses(): void
    {
        $file = $this->tmpDir . '/openapi.yaml';
        file_put_contents($file, <<<'YAML'
            openapi: 3.0.2
            info:
              title: Test
              version: 1.0.0
              x-released: 2024-01-02
            paths: {}
            YAML);

        $openApi = (new SchemaParser(JaneOpenApi::buildSerializer()))->parseSchema($file);

        self::assertInstanceOf(OpenApi::class, $openApi);
        self::assertSame('Test', $openApi->info->title);
    }

    private function serializedProbe(): string
    {
        return \sprintf('O:%d:"%s":0:{}', \strlen(SchemaParserYamlProbe::class), SchemaParserYamlProbe::class);
    }
}

class SchemaParserYamlProbe
{
    public static bool $woken = false;

    public function __wakeup(): void
    {
        self::$woken = true;
    }
}
