<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\BuiltinTransformer;
use Jane\Component\AutoMapper\Transformer\NullableTransformer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

class NullableTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testNullTransformerTargetNullable()
    {
        $transformer = new NullableTransformer(new BuiltinTransformer(new Type('string'), [new Type('string', true)]), true);

        $output = $this->evalTransformer($transformer, 'foo');

        self::assertSame('foo', $output);

        $output = $this->evalTransformer($transformer, null);

        self::assertNull($output);
    }

    public function testNullTransformerTargetNotNullable()
    {
        $transformer = new NullableTransformer(new BuiltinTransformer(new Type('string'), [new Type('string')]), false);

        $output = $this->evalTransformer($transformer, 'foo');

        self::assertSame('foo', $output);
    }
}
