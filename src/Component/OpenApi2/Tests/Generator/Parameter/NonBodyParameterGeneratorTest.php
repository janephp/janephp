<?php

namespace Jane\Component\OpenApi2\Tests\Generator\Parameter;

use Jane\Component\OpenApi2\Generator\Parameter\NonBodyParameterGenerator;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;

final class NonBodyParameterGeneratorTest extends TestCase
{
    public function testOptionDocParameterIsAnArrayShapeEntry(): void
    {
        $parameter = new QueryParameterSubSchema();
        $parameter->name = 'keep-storage';
        $parameter->type = 'integer';
        $parameter->required = false;
        $parameter->description = "Amount of disk space in bytes to keep for cache.\nDefaults to 0.";

        self::assertSame(
            ' *    "keep-storage"?: int, //Amount of disk space in bytes to keep for cache.' . "\n" . ' *' . str_repeat(' ', 26) . '//Defaults to 0.',
            $this->generator()->generateOptionDocParameter($parameter)
        );
    }

    public function testRequiredHeaderWithoutDescription(): void
    {
        $parameter = new HeaderParameterSubSchema();
        $parameter->name = 'X-Request-Id';
        $parameter->type = 'string';
        $parameter->required = true;

        self::assertSame(' *    "X-Request-Id": string,', $this->generator()->generateOptionDocParameter($parameter));
    }

    /**
     * The options resolver fills in a default, so the key is optional to the
     * caller even when the specification marks the parameter required.
     */
    public function testRequiredParameterWithDefaultIsOptional(): void
    {
        $parameter = new QueryParameterSubSchema();
        $parameter->name = 'page';
        $parameter->type = 'integer';
        $parameter->required = true;
        $parameter->default = 1;

        self::assertSame(' *    "page"?: int,', $this->generator()->generateOptionDocParameter($parameter));
    }

    /**
     * The constructor drops the `= []` default of an options array as soon as
     * the resolver would reject an empty one, so both must agree on "required".
     */
    public function testOptionIsRequiredExactlyWhenTheResolverRequiresIt(): void
    {
        $generator = $this->generator();

        $parameter = new QueryParameterSubSchema();
        $parameter->name = 'until';
        $parameter->type = 'string';
        $parameter->required = true;
        self::assertTrue($generator->isOptionRequired($parameter));

        $parameter->required = false;
        self::assertFalse($generator->isOptionRequired($parameter));

        $parameter = new FormDataParameterSubSchema();
        $parameter->name = 'page';
        $parameter->type = 'integer';
        $parameter->required = true;
        $parameter->default = 1;
        self::assertFalse($generator->isOptionRequired($parameter));
    }

    private function generator(): NonBodyParameterGenerator
    {
        return new NonBodyParameterGenerator((new ParserFactory())->createForHostVersion());
    }
}
