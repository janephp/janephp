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

    public function setUp(): void
    {
        $this->jane = Jane::build([
            'reference' => true,
            'strict' => false,
        ]);
        $this->printer = new Printer(new Standard(), '');
        $this->printer->setUseFixer(true);
        $this->printer->setCleanGenerated(false);
    }

    /**
     * Unique test with ~70% coverage, library generated from json schema must be the same as the library used.
     */
    public function testLibrary(): void
    {
        $registry = new Registry();
        $registry->addSchema(new Schema(__DIR__ . '/data/json-schema.json', 'Jane\JsonSchema', __DIR__ . '/generated', 'JsonSchema'));
        $registry->addOutputDirectory(__DIR__ . '/generated');

        $this->jane->generate($registry);
        $this->printer->output($registry);

        $this->assertFileExists(__DIR__ . '/generated/Model/JsonSchema.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/JaneObjectNormalizer.php');

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Model/JsonSchema.php'),
            file_get_contents(__DIR__ . '/generated/Model/JsonSchema.php')
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Normalizer/JsonSchemaNormalizer.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php')
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../Normalizer/JaneObjectNormalizer.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/JaneObjectNormalizer.php')
        );
    }
}
