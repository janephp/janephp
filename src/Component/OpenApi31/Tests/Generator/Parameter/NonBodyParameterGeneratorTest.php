<?php

namespace Jane\Component\OpenApi31\Tests\Generator\Parameter;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\OpenApi31\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi31\JaneOpenApi;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;

final class NonBodyParameterGeneratorTest extends TestCase
{
    public function testOptionDocParameterIsAnArrayShapeEntry(): void
    {
        $schema = new JsonSchema();
        $schema->type = ['integer', 'null'];

        $parameter = new Parameter();
        $parameter->name = 'per_page';
        $parameter->required = false;
        $parameter->schema = $schema;
        $parameter->description = "Number of items returned per page.\nAt most 200.";

        self::assertSame(
            ' *    "per_page"?: int, //Number of items returned per page.' . "\n" . ' *' . str_repeat(' ', 22) . '//At most 200.',
            $this->generator()->generateOptionDocParameter($parameter)
        );
    }

    public function testRequiredParameter(): void
    {
        $schema = new JsonSchema();
        $schema->type = 'string';

        $parameter = new Parameter();
        $parameter->name = 'id';
        $parameter->required = true;
        $parameter->schema = $schema;

        self::assertSame(' *    "id": string,', $this->generator()->generateOptionDocParameter($parameter));
    }

    /**
     * Mirrors the options resolver: without a schema nothing is required, and
     * a default fills the key in, so it is optional to the caller either way.
     */
    public function testKeyIsOptionalUnlessTheResolverRequiresIt(): void
    {
        $parameter = new Parameter();
        $parameter->name = 'id';
        $parameter->required = true;

        self::assertSame(' *    "id"?: mixed,', $this->generator()->generateOptionDocParameter($parameter));

        $schema = new JsonSchema();
        $schema->type = 'integer';
        $schema->default = 1;

        $parameter = new Parameter();
        $parameter->name = 'page';
        $parameter->required = true;
        $parameter->schema = $schema;

        self::assertSame(' *    "page"?: int,', $this->generator()->generateOptionDocParameter($parameter));
    }

    private function generator(): NonBodyParameterGenerator
    {
        return new NonBodyParameterGenerator(JaneOpenApi::buildSerializer(), (new ParserFactory())->createForHostVersion());
    }
}
