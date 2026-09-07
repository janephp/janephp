<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Generator\RuntimeGenerator;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;

final class RuntimeGeneratorTest extends TestCase
{
    /**
     * The runtime Client's own template types its endpoint methods with the
     * Endpoint interface, a dependency the client generator cannot see: a
     * specification without operations otherwise gets a Client referencing an
     * interface that is never generated.
     */
    public function testRequiringTheClientAlsoGeneratesTheEndpointInterface(): void
    {
        $schema = new Schema('openapi.json', 'Vendor\Api', '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile('Vendor\Api\Runtime\Client\Client');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry(), true, new EventDispatcher()));

        $files = array_map(static fn (File $file): string => basename($file->getFilename()), $schema->getFiles());

        self::assertContains('Client.php', $files);
        self::assertContains('Endpoint.php', $files);
    }
}
