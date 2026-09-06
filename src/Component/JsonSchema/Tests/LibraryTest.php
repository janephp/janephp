<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;

class LibraryTest extends TestCase
{
    use CodeStyleFixerTrait;

    /**
     * @var Jane
     */
    protected $jane;

    protected $printer;

    protected function setUp(): void
    {
        $this->jane = Jane::build([
            'reference' => true,
            'strict' => false,
            'skip-null-values' => false,
        ], new EventDispatcher());
        $this->printer = new Printer(new Standard(['shortArraySyntax' => true]), '');
        $this->printer->setCleanGenerated(false);
    }

    /**
     * Unique test with ~70% coverage, library generated from json schema must be the same as the library used.
     */
    public function testLibrary(): void
    {
        $path = __DIR__ . '/generated';

        $registry = new Registry();
        $registry->addSchema(new Schema(__DIR__ . '/data/json-schema.json', 'Jane\Component\JsonSchema\JsonSchema', $path, 'JsonSchema'));
        $registry->addOutputDirectory($path);

        $this->jane->generate($registry);
        $this->printer->output($registry);
        $this->fixCodeStyle(__DIR__ . '/../JsonSchema');
        $this->fixCodeStyle($path);

        $this->assertFileExists(__DIR__ . '/generated/Model/JsonSchema.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php');
        $this->assertFileExists(__DIR__ . '/generated/Normalizer/JaneObjectNormalizer.php');

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../JsonSchema/Model/JsonSchema.php'),
            file_get_contents(__DIR__ . '/generated/Model/JsonSchema.php')
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../JsonSchema/Normalizer/JsonSchemaNormalizer.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/JsonSchemaNormalizer.php'),
        );

        $this->assertEquals(
            file_get_contents(__DIR__ . '/../JsonSchema/Normalizer/JaneObjectNormalizer.php'),
            file_get_contents(__DIR__ . '/generated/Normalizer/JaneObjectNormalizer.php'),
        );
    }
}
