<?php

namespace Jane\JsonSchema\Tests;

use Jane\JsonSchema\Jane;
use Jane\JsonSchema\Printer;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    /**
     * @var Jane
     */
    protected $jane;

    protected $printer;

    public function setUp()
    {
        $this->jane = Jane::build([
            'reference' => true,
            'strict' => false,
        ]);
        $this->printer = new Printer(new Standard());
    }

    /**
     * Unique test with ~70% coverage, library generated from json schema must be the same as the library used.
     */
    public function testLibrary()
    {
        $registry = new Registry();
        $registry->addSchema(new Schema(__DIR__ . '/data/json-schema.json', 'Jane\JsonSchema', __DIR__ . '/generated', 'JsonSchema', 4));

        $this->jane->generate($registry);
        $this->printer->output($registry);

        $this->assertFileExists(__DIR__ . '/generated/Model/JsonSchema.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/NormalizerFactory.php');

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Model/JsonSchema.php'),
            file_get_contents(__DIR__ . '/generated/Model/JsonSchema.php')
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Normalizer/JsonSchemaNormalizer.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php')
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Normalizer/NormalizerFactory.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/NormalizerFactory.php')
        );
    }

    public function testBothWay()
    {
        $serializer = Jane::buildSerializer();

        $json = file_get_contents(__DIR__ . '/data/json-schema.json');
        $schema = $serializer->deserialize($json, 'Jane\JsonSchema\Model\JsonSchema', 'json', ['document-origin' => 'tests/data/json-schema.json']);
        $newJson = $serializer->serialize($schema, 'json');

        $this->assertEquals(json_decode($json), json_decode($newJson));
    }
}
