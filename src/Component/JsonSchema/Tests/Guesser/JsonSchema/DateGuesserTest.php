<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\DateGuesser;
use Jane\Component\JsonSchema\Guesser\JsonSchema\DateTimeGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use PHPUnit\Framework\TestCase;

class DateGuesserTest extends TestCase
{
    private DateGuesser $dateGuesser;

    private DateTimeGuesser $dateTimeGuesser;

    protected function setUp(): void
    {
        $this->dateGuesser = new DateGuesser();
        $this->dateTimeGuesser = new DateTimeGuesser();
    }

    /**
     * @dataProvider dateSupportProvider
     */
    public function testDateSupportObject(mixed $type, ?string $format, bool $expected): void
    {
        $schema = new JsonSchema();
        if (null !== $type) {
            $schema->type = $type;
        }
        if (null !== $format) {
            $schema->format = $format;
        }

        self::assertSame($expected, $this->dateGuesser->supportObject($schema));
    }

    public static function dateSupportProvider(): iterable
    {
        yield 'plain string' => ['string', 'date', true];
        yield 'nullable array' => [['string', 'null'], 'date', true];
        yield 'nullable array reversed order' => [['null', 'string'], 'date', true];
        yield 'multiple real types rejected' => [['string', 'integer', 'null'], 'date', false];
        yield 'null type only' => ['null', 'date', false];
        yield 'no type' => [null, 'date', false];
        yield 'wrong scalar type' => ['integer', 'date', false];
        yield 'wrong format' => ['string', 'date-time', false];
        yield 'missing format' => [['string', 'null'], null, false];
    }

    /**
     * @dataProvider dateTimeSupportProvider
     */
    public function testDateTimeSupportObject(mixed $type, ?string $format, bool $expected): void
    {
        $schema = new JsonSchema();
        if (null !== $type) {
            $schema->type = $type;
        }
        if (null !== $format) {
            $schema->format = $format;
        }

        self::assertSame($expected, $this->dateTimeGuesser->supportObject($schema));
    }

    public static function dateTimeSupportProvider(): iterable
    {
        yield 'plain string' => ['string', 'date-time', true];
        yield 'nullable array' => [['string', 'null'], 'date-time', true];
        yield 'nullable array reversed order' => [['null', 'string'], 'date-time', true];
        yield 'multiple real types rejected' => [['string', 'integer', 'null'], 'date-time', false];
        yield 'null type only' => ['null', 'date-time', false];
        yield 'no type' => [null, 'date-time', false];
        yield 'wrong scalar type' => ['integer', 'date-time', false];
        yield 'wrong format' => ['string', 'date', false];
        yield 'missing format' => [['string', 'null'], null, false];
    }

    public function testUnsupportedObjectClassIsRejected(): void
    {
        self::assertFalse($this->dateGuesser->supportObject(new \stdClass()));
        self::assertFalse($this->dateTimeGuesser->supportObject(new \stdClass()));
    }
}
