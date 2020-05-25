<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\Transformer\CopyTransformer;

class CopyTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testCopyTransformer()
    {
        $transformer = new CopyTransformer();

        $output = $this->evalTransformer($transformer, 'foo');

        self::assertSame('foo', $output);
    }
}
