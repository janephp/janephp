<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\DateTimeMutableToImmutableTransformer;
use PHPUnit\Framework\TestCase;

class DateTimeMutableToImmutableTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testDateTimeImmutableTransformer()
    {
        $transformer = new DateTimeMutableToImmutableTransformer();

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, $date);

        self::assertInstanceOf(\DateTimeImmutable::class, $output);
        self::assertSame($date->format(\DateTime::RFC3339), $output->format(\DateTime::RFC3339));
    }
}
