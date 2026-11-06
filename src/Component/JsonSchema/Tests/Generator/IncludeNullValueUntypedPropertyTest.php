<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * With `include-null-value` disabled, a property that the model declares without a native type is
 * left out of the normalized data when it is null and its schema does not allow null. PHP initializes
 * such a property to null, so the presence check alone cannot tell "never set" from "set to null".
 *
 * @see https://github.com/janephp/janephp/issues/1140
 */
class IncludeNullValueUntypedPropertyTest extends TestCase
{
    private const SCHEMA = <<<'JSON'
        {
            "type": "object",
            "properties": {
                "name": {"type": "string"},
                "email": {"anyOf": [{"type": "string", "format": "email"}, {"type": "string", "maxLength": 0}]},
                "size": {"type": ["string", "integer"]},
                "code": {"type": ["string", "integer", "null"]}
            }
        }
        JSON;

    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-include-null-value-untyped-' . uniqid('', true);
        (new Filesystem())->mkdir($this->tmpDir);
        file_put_contents($this->tmpDir . '/schema.json', self::SCHEMA);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testUnsetPropertyWithoutNativeTypeIsLeftOut(): void
    {
        $namespace = $this->generate(true);
        $model = (string) file_get_contents($this->tmpDir . '/generated/Model/Test.php');

        self::assertStringContainsString('public $email;', $model);
        self::assertStringContainsString('public $size;', $model);

        $data = $this->normalize($namespace, ['name' => 'Jane']);

        self::assertSame('Jane', $data['name']);
        self::assertArrayNotHasKey('email', $data);
        self::assertArrayNotHasKey('size', $data);
    }

    public function testUnsetPropertyWithoutNativeTypeIsLeftOutWithoutStrictMode(): void
    {
        $namespace = $this->generate(false);

        $data = $this->normalize($namespace, ['name' => 'Jane']);

        self::assertArrayNotHasKey('email', $data);
        self::assertArrayNotHasKey('size', $data);
    }

    public function testSetPropertyWithoutNativeTypeIsSent(): void
    {
        $namespace = $this->generate(true);

        $data = $this->normalize($namespace, ['email' => '', 'size' => 3]);

        self::assertSame('', $data['email']);
        self::assertSame(3, $data['size']);
    }

    public function testNullIsSentWhenTheSchemaAllowsIt(): void
    {
        $namespace = $this->generate(true);

        $data = $this->normalize($namespace, ['code' => null]);

        self::assertArrayHasKey('code', $data);
        self::assertNull($data['code']);
    }

    /**
     * Generate the schema with `include-null-value` disabled and validation enabled, and autoload its namespace.
     */
    private function generate(bool $strict): string
    {
        $namespace = 'JaneTest\IncludeNullValueUntyped' . str_replace('.', '', uniqid('', true));
        $directory = $this->tmpDir . '/generated';

        $registry = new Registry();
        $registry->addSchema(new Schema($this->tmpDir . '/schema.json', $namespace, $directory, 'Test'));
        $registry->addOutputDirectory($directory);

        Jane::build(['include-null-value' => false, 'validation' => true, 'strict' => $strict])->generate($registry);
        (new Printer(new Standard(['shortArraySyntax' => true])))->output($registry);

        spl_autoload_register(static function (string $class) use ($namespace, $directory): void {
            if (str_starts_with($class, $namespace . '\\')) {
                require_once $directory . '/' . str_replace('\\', '/', substr($class, \strlen($namespace) + 1)) . '.php';
            }
        });

        return $namespace;
    }

    /**
     * Set the given properties on a new model, then normalize it to JSON and decode it again.
     *
     * @param array<string, mixed> $properties
     *
     * @return array<string, mixed>
     */
    private function normalize(string $namespace, array $properties): array
    {
        $modelClass = $namespace . '\Model\Test';
        $item = new $modelClass();
        foreach ($properties as $name => $value) {
            $item->{$name} = $value;
        }

        $normalizerClass = $namespace . '\Normalizer\JaneObjectNormalizer';
        $json = (new Serializer([new $normalizerClass()], [new JsonEncoder()]))->serialize($item, 'json');

        return json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }
}
