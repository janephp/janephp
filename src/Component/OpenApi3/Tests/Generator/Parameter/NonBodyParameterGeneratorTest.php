<?php

namespace Jane\Component\OpenApi3\Tests\Generator\Parameter;

use Jane\Component\OpenApi3\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi3\JaneOpenApi;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;

final class NonBodyParameterGeneratorTest extends TestCase
{
    public function testOptionDocParameterIsAnArrayShapeEntry(): void
    {
        $schema = new Schema();
        $schema->type = 'string';

        $parameter = new Parameter();
        $parameter->name = 'timeout';
        $parameter->required = false;
        $parameter->schema = $schema;
        $parameter->description = "Maximum time to wait for the operation to complete.\nOnly the waiting is aborted, and the calls returned.";

        self::assertSame(
            ' *    "timeout"?: string, //Maximum time to wait for the operation to complete.' . "\n" . ' *' . str_repeat(' ', 24) . '//Only the waiting is aborted, and the calls returned.',
            $this->generator()->generateOptionDocParameter($parameter)
        );
    }

    public function testRequiredParameter(): void
    {
        $schema = new Schema();
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

        $schema = new Schema();
        $schema->type = 'integer';
        $schema->default = 1;

        $parameter = new Parameter();
        $parameter->name = 'page';
        $parameter->required = true;
        $parameter->schema = $schema;

        self::assertSame(' *    "page"?: int,', $this->generator()->generateOptionDocParameter($parameter));
    }

    /**
     * The constructor drops the `= []` default of an options array as soon as
     * the resolver would reject an empty one, so both must agree on "required".
     */
    public function testOptionIsRequiredExactlyWhenTheResolverRequiresIt(): void
    {
        $generator = $this->generator();

        $schema = new Schema();
        $schema->type = 'string';

        $parameter = new Parameter();
        $parameter->name = 'filter';
        $parameter->required = true;
        $parameter->schema = $schema;
        self::assertTrue($generator->isOptionRequired($parameter));

        $parameter->required = false;
        self::assertFalse($generator->isOptionRequired($parameter));

        $withDefault = new Schema();
        $withDefault->type = 'integer';
        $withDefault->default = 1;

        $parameter = new Parameter();
        $parameter->name = 'page';
        $parameter->required = true;
        $parameter->schema = $withDefault;
        self::assertFalse($generator->isOptionRequired($parameter));

        $parameter = new Parameter();
        $parameter->name = 'id';
        $parameter->required = true;
        self::assertFalse($generator->isOptionRequired($parameter));
    }

    private function generator(): NonBodyParameterGenerator
    {
        return new NonBodyParameterGenerator(JaneOpenApi::buildSerializer(), (new ParserFactory())->createForHostVersion());
    }
}
