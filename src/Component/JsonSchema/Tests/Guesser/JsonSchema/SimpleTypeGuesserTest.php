<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use PHPUnit\Framework\TestCase;

class SimpleTypeGuesserTest extends TestCase
{
    private SimpleTypeGuesser $guesser;

    protected function setUp(): void
    {
        $this->guesser = new SimpleTypeGuesser();
    }

    /**
     * @dataProvider supportProvider
     */
    public function testSupportObject(mixed $type, ?string $format, bool $expected): void
    {
        $schema = new JsonSchema();
        if (null !== $type) {
            $schema->type = $type;
        }
        if (null !== $format) {
            $schema->format = $format;
        }

        self::assertSame($expected, $this->guesser->supportObject($schema));
    }

    public static function supportProvider(): iterable
    {
        // The format exclusion must be keyed on the schema type (an associative
        // lookup), not a value lookup on the type => formats map.
        yield 'string with excluded format' => ['string', 'date-time', false];
        yield 'string with non excluded format' => ['string', 'date', true];
        yield 'string without format' => ['string', null, true];
        yield 'boolean' => ['boolean', null, true];
        yield 'integer' => ['integer', null, true];
        yield 'number' => ['number', null, true];
        yield 'null' => ['null', null, true];
        yield 'integer with date-time format is kept' => ['integer', 'date-time', true];
        yield 'unsupported type' => ['object', null, false];
    }

    public function testUnsupportedObjectClassIsRejected(): void
    {
        self::assertFalse($this->guesser->supportObject(new \stdClass()));
    }
}
