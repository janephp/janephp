<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\Transformer\DateTimeToStringTransformer;
use PHPUnit\Framework\TestCase;

class DateTimeToStringTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testDateTimeTransformer()
    {
        $transformer = new DateTimeToStringTransformer();

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, new \DateTime());

        self::assertSame($date->format(\DateTime::RFC3339), $output);
    }

    public function testDateTimeTransformerCustomFormat()
    {
        $transformer = new DateTimeToStringTransformer(\DateTime::COOKIE);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, new \DateTime());

        self::assertSame($date->format(\DateTime::COOKIE), $output);
    }
}
