<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Generator\Options;
use Jane\Component\JsonSchema\Guesser\Guess\EnumType;
use Jane\Component\JsonSchema\Guesser\Guess\PatternMultipleType;
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
 * Generation and runtime checks of the `enums-unknown-value` option on the JsonSchema path: strict and loose
 * doc types, nullable arrays, pattern properties, a union of two enums and input of another type.
 */
class EnumUnknownValueTest extends TestCase
{
    private const SCHEMA = <<<'JSON'
        {
            "definitions": {
                "Color": {"type": "string", "enum": ["red", "blue"]},
                "Size": {"type": "string", "enum": ["s", "m"]},
                "Level": {"type": "integer", "enum": [1, 2]}
            },
            "type": "object",
            "properties": {
                "color": {"$ref": "#/definitions/Color"},
                "level": {"$ref": "#/definitions/Level"},
                "colors": {"type": ["array", "null"], "items": {"$ref": "#/definitions/Color"}},
                "colorOrSize": {"anyOf": [{"$ref": "#/definitions/Color"}, {"$ref": "#/definitions/Size"}]}
            },
            "patternProperties": {"^x-": {"$ref": "#/definitions/Color"}}
        }
        JSON;

    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-enum-unknown-value-' . uniqid('', true);
        (new Filesystem())->mkdir($this->tmpDir);
        file_put_contents($this->tmpDir . '/schema.json', self::SCHEMA);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testNullModeReadsUnknownAndWrongTypedValuesAsNull(): void
    {
        $namespace = $this->generate(Options::ENUMS_UNKNOWN_VALUE_NULL, true);
        $model = (string) file_get_contents($this->tmpDir . '/generated/Model/Test.php');

        self::assertStringContainsString('public ?Color $color;', $model);
        self::assertStringContainsString('@var list<Color|null>|null', $model);
        self::assertStringContainsString('@var Color|Size|null', $model);

        $item = $this->createSerializer($namespace)->deserialize(
            '{"color": "green", "level": "high", "colors": ["red", "green"], "colorOrSize": "m", "x-tint": "green"}',
            $namespace . '\Model\Test',
            'json'
        );

        self::assertNull($item->color);
        self::assertNull($item->level);
        self::assertSame([\constant($namespace . '\Model\Color::Red'), null], $item->colors);
        self::assertSame(\constant($namespace . '\Model\Size::M'), $item->colorOrSize);
        self::assertNull($item['x-tint']);
    }

    public function testNullModeDocumentsNullOnceWithoutStrictMode(): void
    {
        $this->generate(Options::ENUMS_UNKNOWN_VALUE_NULL, false);
        $model = (string) file_get_contents($this->tmpDir . '/generated/Model/Test.php');

        self::assertStringContainsString("@var Color|null\n", $model);
        self::assertStringContainsString('@var list<Color|null>|null', $model);
        self::assertStringNotContainsString('null|null', $model);
    }

    public function testScalarModeKeepsUnknownValuesAndTriesEachEnumOfAUnion(): void
    {
        $namespace = $this->generate(Options::ENUMS_UNKNOWN_VALUE_SCALAR, true);
        $model = (string) file_get_contents($this->tmpDir . '/generated/Model/Test.php');

        self::assertStringContainsString('public Color|string $color;', $model);
        self::assertStringContainsString('@var Color|Size|string', $model);

        $serializer = $this->createSerializer($namespace);
        $json = '{"color":"green","level":7,"colors":["red","green"],"colorOrSize":"m","x-tint":"green"}';
        $item = $serializer->deserialize($json, $namespace . '\Model\Test', 'json');

        self::assertSame('green', $item->color);
        self::assertSame(7, $item->level);
        self::assertSame([\constant($namespace . '\Model\Color::Red'), 'green'], $item->colors);
        self::assertSame(\constant($namespace . '\Model\Size::M'), $item->colorOrSize);
        self::assertSame('green', $item['x-tint']);
        self::assertSame($json, $serializer->serialize($item, 'json'));

        $item = $serializer->deserialize('{"colorOrSize": "green"}', $namespace . '\Model\Test', 'json');
        self::assertSame('green', $item->colorOrSize);
    }

    public function testPatternItemsReadAsNullAreDocumentedAsNullable(): void
    {
        $type = (new PatternMultipleType(new \stdClass()))
            ->addType('^x-', new EnumType(null, 'string', 'Color', 'App', [], Options::ENUMS_UNKNOWN_VALUE_NULL));

        self::assertSame('(Color|null)[]', $type->getDocTypeHint('App\Model'));
    }

    /**
     * Generate the schema in the given mode and autoload its namespace.
     */
    private function generate(string $unknownValue, bool $strict): string
    {
        $namespace = 'JaneTest\EnumUnknownValue' . str_replace('.', '', uniqid('', true));
        $directory = $this->tmpDir . '/generated';

        $registry = new Registry();
        $registry->addSchema(new Schema($this->tmpDir . '/schema.json', $namespace, $directory, 'Test'));
        $registry->addOutputDirectory($directory);

        Jane::build(['enums-as-objects' => true, 'enums-unknown-value' => $unknownValue, 'strict' => $strict])->generate($registry);
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
