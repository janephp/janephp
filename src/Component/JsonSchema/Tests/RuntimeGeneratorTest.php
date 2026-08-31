<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\RuntimeGenerator;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;

class RuntimeGeneratorTest extends TestCase
{
    /**
     * ValidatorTrait's own template throws ValidationException, a dependency
     * require-sites cannot see: emitting the trait without the exception makes
     * generated clients fatal with "Class not found" instead of throwing it.
     *
     * @see https://github.com/janephp/janephp/issues/1058
     */
    public function testRequiringValidatorTraitAlsoGeneratesItsValidationException(): void
    {
        $schema = new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile('Vendor\Api\Runtime\Normalizer\ValidatorTrait');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry()));

        $files = array_map(static fn (File $file): string => basename($file->getFilename()), $schema->getFiles());

        $this->assertContains('ValidatorTrait.php', $files);
        $this->assertContains('ValidationException.php', $files);
    }

    public function testUnrequiredRuntimeClassesStayAbsent(): void
    {
        $schema = new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile('Vendor\Api\Runtime\Normalizer\CheckArray');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry()));

        $files = array_map(static fn (File $file): string => basename($file->getFilename()), $schema->getFiles());

        $this->assertSame(['CheckArray.php'], $files);
    }
}
