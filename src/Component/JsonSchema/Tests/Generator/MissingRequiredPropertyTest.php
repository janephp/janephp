<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Generated denormalizers must not expose uninitialized typed properties when
 * the payload omits a property listed in the schema's `required` array.
 *
 * @see https://github.com/janephp/janephp/issues/1126
 */
class MissingRequiredPropertyTest extends TestCase
{
    private const SCHEMA = <<<'JSON'
        {
            "type": "object",
            "required": ["id", "name"],
            "properties": {
                "id": {"type": "string"},
                "name": {"type": ["string", "null"]},
                "label": {"type": "string"}
            }
        }
        JSON;

    private const ALL_OF_SCHEMA = <<<'JSON'
        {
            "type": "object",
            "allOf": [
                {"$ref": "#/definitions/Base"},
                {"$ref": "#/definitions/Extra"}
            ],
            "definitions": {
                "Base": {"type": "object", "required": ["id"], "properties": {"id": {"type": "string"}}},
                "Extra": {"type": "object", "required": ["label"], "properties": {"label": {"type": "string"}}}
            }
        }
        JSON;

    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-missing-required-property-' . uniqid('', true);
        (new Filesystem())->mkdir($this->tmpDir);
        file_put_contents($this->tmpDir . '/schema.json', self::SCHEMA);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testMissingRequiredPropertyThrowsAtDenormalizationTime(): void
    {
        $namespace = $this->generate();

        try {
            $this->createSerializer($namespace)->denormalize(['label' => 'hello'], $namespace . '\Model\Payload');
            self::fail('Expected a MissingRequiredPropertyException.');
        } catch (\Throwable $exception) {
            self::assertInstanceOf($namespace . '\Runtime\Normalizer\MissingRequiredPropertyException', $exception);
            self::assertInstanceOf(JaneExceptionInterface::class, $exception);
            self::assertStringContainsString('Required property "id"', $exception->getMessage());
            self::assertStringContainsString($namespace . '\Model\Payload', $exception->getMessage());
        }
    }

    public function testRequiredNullablePropertyMustStillBePresent(): void
    {
        $namespace = $this->generate();
        $serializer = $this->createSerializer($namespace);

        $payload = $serializer->denormalize(['id' => '42', 'name' => null], $namespace . '\Model\Payload');
        self::assertSame('42', $payload->id);
        self::assertNull($payload->name);

        $this->expectException($namespace . '\Runtime\Normalizer\MissingRequiredPropertyException');
        $this->expectExceptionMessage('Required property "name"');
        $serializer->denormalize(['id' => '42'], $namespace . '\Model\Payload');
    }

    public function testOptionalPropertyKeepsItsCurrentBehaviour(): void
    {
        $namespace = $this->generate();

        $payload = $this->createSerializer($namespace)->denormalize(['id' => '42', 'name' => 'Jane'], $namespace . '\Model\Payload');

        self::assertSame('Jane', $payload->name);
        self::assertFalse(isset($payload->label));
    }

    public function testSkipRequiredFieldsKeepsPartialDenormalization(): void
    {
        $namespace = $this->generate(['skip-required-fields' => true]);
        $normalizer = (string) file_get_contents($this->tmpDir . '/generated/Normalizer/PayloadNormalizer.php');
        self::assertStringNotContainsString('MissingRequiredPropertyException', $normalizer);

        $payload = $this->createSerializer($namespace)->denormalize(['label' => 'hello'], $namespace . '\Model\Payload');
        self::assertSame('hello', $payload->label);

        $this->expectException(\Error::class);
        $this->expectExceptionMessage('must not be accessed before initialization');
        $payload->id;
    }

    public function testAllOfInheritedRequiredPropertyIsEnforced(): void
    {
        file_put_contents($this->tmpDir . '/schema.json', self::ALL_OF_SCHEMA);
        $namespace = $this->generate();

        $this->expectException($namespace . '\Runtime\Normalizer\MissingRequiredPropertyException');
        $this->expectExceptionMessage('Required property "id"');

        $this->createSerializer($namespace)->denormalize(['label' => 'hello'], $namespace . '\Model\Payload');
    }

    private function generate(array $options = []): string
    {
        $namespace = 'JaneTest\MissingRequiredProperty' . str_replace('.', '', uniqid('', true));
        $directory = $this->tmpDir . '/generated';

        $registry = new Registry();
        $registry->addSchema(new Schema($this->tmpDir . '/schema.json', $namespace, $directory, 'Payload'));
        $registry->addOutputDirectory($directory);

        Jane::build($options)->generate($registry);
        (new Printer(new Standard(['shortArraySyntax' => true])))->output($registry);

        spl_autoload_register(static function (string $class) use ($namespace, $directory): void {
            if (str_starts_with($class, $namespace . '\\')) {
                require_once $directory . '/' . str_replace('\\', '/', substr($class, \strlen($namespace) + 1)) . '.php';
            }
        });

        return $namespace;
    }

    private function createSerializer(string $namespace): Serializer
    {
        $normalizerClass = $namespace . '\Normalizer\JaneObjectNormalizer';

        return new Serializer([new $normalizerClass()], [new JsonEncoder()]);
    }
}
