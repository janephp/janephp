<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\Transformer\DateTimeToStringTansformer;

class DateTimeToStringTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testDateTimeTransformer()
    {
        $transformer = new DateTimeToStringTansformer();

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, new \DateTime());

        self::assertSame($date->format(\DateTime::RFC3339), $output);
    }

    public function testDateTimeTransformerCustomFormat()
    {
        $transformer = new DateTimeToStringTansformer(\DateTime::COOKIE);

        $date = new \DateTime();
        $output = $this->evalTransformer($transformer, new \DateTime());

        self::assertSame($date->format(\DateTime::COOKIE), $output);
    }
}
