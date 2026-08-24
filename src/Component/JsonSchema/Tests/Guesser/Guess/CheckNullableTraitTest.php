<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Guess\CheckNullableTrait;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema as OpenApi2Schema;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema as OpenApi3Schema;
use PHPUnit\Framework\TestCase;

class CheckNullableTraitTest extends TestCase
{
    private object $checker;

    protected function setUp(): void
    {
        $this->checker = new class() {
            use CheckNullableTrait;
        };
    }

    /**
     * @dataProvider jsonSchemaTypeProvider
     */
    public function testJsonSchemaNullable(mixed $type, bool $expectedNullable): void
    {
        $schema = new JsonSchema();
        $schema->setType($type);

        self::assertSame($expectedNullable, $this->checker->isNullable($schema));
    }

    public static function jsonSchemaTypeProvider(): iterable
    {
        yield 'array containing null' => [['string', 'null'], true];
        yield 'array without null' => [['string', 'integer'], false];
        yield 'null string type' => ['null', true];
        yield 'string type' => ['string', false];
        yield 'integer type' => ['integer', false];
        yield 'no type' => [null, false];
    }

    public function testOpenApi2XNullable(): void
    {
        $nullableSchema = new OpenApi2Schema();
        $nullableSchema->offsetSet('x-nullable', true);
        self::assertTrue($this->checker->isNullable($nullableSchema));

        $notNullableSchema = new OpenApi2Schema();
        $notNullableSchema->offsetSet('x-nullable', false);
        self::assertFalse($this->checker->isNullable($notNullableSchema));

        $invalidFlagSchema = new OpenApi2Schema();
        $invalidFlagSchema->offsetSet('x-nullable', 'yes');
        self::assertFalse($this->checker->isNullable($invalidFlagSchema));

        $missingFlagSchema = new OpenApi2Schema();
        self::assertFalse($this->checker->isNullable($missingFlagSchema));
    }

    public function testOpenApi3Nullable(): void
    {
        $nullableSchema = new OpenApi3Schema();
        $nullableSchema->setNullable(true);
        self::assertTrue($this->checker->isNullable($nullableSchema));

        $notNullableSchema = new OpenApi3Schema();
        $notNullableSchema->setNullable(false);
        self::assertFalse($this->checker->isNullable($notNullableSchema));

        $unsetSchema = new OpenApi3Schema();
        self::assertFalse($this->checker->isNullable($unsetSchema));
    }

    public function testUnsupportedObjectIsNeverNullable(): void
    {
        self::assertFalse($this->checker->isNullable(new \stdClass()));
    }
}
