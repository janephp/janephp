<?php

namespace Jane\AutoMapper\Tests\Transformer;

use Jane\AutoMapper\Transformer\DateTimeMutableToImmutableTransformer;
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

    public function testAssignByRef()
    {
        $transformer = new DateTimeMutableToImmutableTransformer();

        self::assertFalse($transformer->assignByRef());
    }

    public function testEmptyDependencies()
    {
        $transformer = new DateTimeMutableToImmutableTransformer();

        self::assertEmpty($transformer->getDependencies());
    }
}
