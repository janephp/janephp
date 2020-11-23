<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\StringToDateTimeTransformer;
use PHPUnit\Framework\TestCase;

class StringToDateTimeTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testDateTimeTransformer()
    {
        $transformer = new StringToDateTimeTransformer(\DateTime::class);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, $date->format(\DateTime::RFC3339));

        self::assertInstanceOf(\DateTime::class, $output);
        self::assertSame($date->format(\DateTime::RFC3339), $output->format(\DateTime::RFC3339));
    }

    public function testDateTimeTransformerCustomFormat()
    {
        $transformer = new StringToDateTimeTransformer(\DateTime::class, \DateTime::COOKIE);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, $date->format(\DateTime::COOKIE));

        self::assertInstanceOf(\DateTime::class, $output);
        self::assertSame($date->format(\DateTime::RFC3339), $output->format(\DateTime::RFC3339));
    }

    public function testDateTimeTransformerImmutable()
    {
        $transformer = new StringToDateTimeTransformer(\DateTimeImmutable::class, \DateTime::COOKIE);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, $date->format(\DateTime::COOKIE));

        self::assertInstanceOf(\DateTimeImmutable::class, $output);
    }

    public function testDateTimeTransformerInterface()
    {
        $transformer = new StringToDateTimeTransformer(\DateTimeInterface::class);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, $date->format(\DateTime::RFC3339));

        self::assertInstanceOf(\DateTimeImmutable::class, $output);
    }
}
