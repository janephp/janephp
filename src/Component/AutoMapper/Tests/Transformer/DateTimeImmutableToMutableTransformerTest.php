<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\DateTimeImmutableToMutableTransformer;
use PHPUnit\Framework\TestCase;

class DateTimeImmutableToMutableTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testDateTimeImmutableTransformer()
    {
        $transformer = new DateTimeImmutableToMutableTransformer();

        $date = new \DateTimeImmutable();
        $output = $this->evalTransformer($transformer, $date);

        self::assertInstanceOf(\DateTime::class, $output);
        self::assertSame($date->format(\DateTime::RFC3339), $output->format(\DateTime::RFC3339));
    }
}
