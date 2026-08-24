<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\Format\DateValidator;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class DateValidatorTest extends TestCase
{
    /**
     * @dataProvider supportProvider
     */
    public function testSupport(mixed $type, ?string $format, bool $expected): void
    {
        $schema = new JsonSchema();
        if (null !== $type) {
            $schema->setType($type);
        }
        if (null !== $format) {
            $schema->setFormat($format);
        }

        $validator = new DateValidator();

        self::assertSame($expected, $validator->supports($schema));
    }

    public static function supportProvider(): iterable
    {
        yield 'plain string' => ['string', 'date', true];
        yield 'array string' => [['string'], 'date', true];
        yield 'nullable array' => [['string', 'null'], 'date', true];
        yield 'no type' => [null, 'date', true];
        yield 'wrong scalar type' => ['integer', 'date', false];
        yield 'wrong format' => ['string', 'date-time', false];
        yield 'missing format' => ['string', null, false];
    }

    public function testUnsupportedObjectClassIsRejected(): void
    {
        self::assertFalse((new DateValidator())->supports(new \stdClass()));
    }

    public function testGuessUsesDateConstraintForDefaultFormat(): void
    {
        $guess = new Property(new JsonSchema(), 'ticketDate', '#/properties/ticketDate');

        (new DateValidator('Y-m-d'))->guess(new JsonSchema(), 'ticketDate', $guess);

        $guesses = $guess->getValidatorGuesses();
        self::assertCount(1, $guesses);
        self::assertSame(Date::class, $guesses[0]->getConstraintClass());
        self::assertSame([], $guesses[0]->getArguments());
    }

    public function testGuessUsesDateTimeConstraintForCustomFormat(): void
    {
        $guess = new Property(new JsonSchema(), 'ticketDate', '#/properties/ticketDate');

        (new DateValidator('d.m.Y'))->guess(new JsonSchema(), 'ticketDate', $guess);

        $guesses = $guess->getValidatorGuesses();
        self::assertCount(1, $guesses);
        self::assertSame(DateTime::class, $guesses[0]->getConstraintClass());
        self::assertSame(['format' => 'd.m.Y'], $guesses[0]->getArguments());
    }
}
