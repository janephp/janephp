<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\Format\DateTimeValidator;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\DateTime;

class DateTimeValidatorTest extends TestCase
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

        $validator = new DateTimeValidator();

        self::assertSame($expected, $validator->supports($schema));
    }

    public static function supportProvider(): iterable
    {
        yield 'plain string' => ['string', 'date-time', true];
        yield 'array string' => [['string'], 'date-time', true];
        yield 'nullable array' => [['string', 'null'], 'date-time', true];
        yield 'no type' => [null, 'date-time', true];
        yield 'wrong scalar type' => ['integer', 'date-time', false];
        yield 'wrong format' => ['string', 'date', false];
        yield 'missing format' => ['string', null, false];
    }

    public function testUnsupportedObjectClassIsRejected(): void
    {
        self::assertFalse((new DateTimeValidator())->supports(new \stdClass()));
    }

    public function testGuessUsesOutputFormatByDefault(): void
    {
        $guess = new Property(new JsonSchema(), 'updatedAt', '#/properties/updatedAt');

        (new DateTimeValidator(\DateTimeInterface::RFC3339))->guess(new JsonSchema(), 'updatedAt', $guess);

        $guesses = $guess->getValidatorGuesses();
        self::assertCount(1, $guesses);
        self::assertSame(DateTime::class, $guesses[0]->getConstraintClass());
        self::assertSame(['format' => \DateTimeInterface::RFC3339], $guesses[0]->getArguments());
    }

    public function testGuessPrefersInputFormatWhenProvided(): void
    {
        $guess = new Property(new JsonSchema(), 'updatedAt', '#/properties/updatedAt');

        (new DateTimeValidator(\DateTimeInterface::RFC3339, 'd/m/Y H:i:s'))->guess(new JsonSchema(), 'updatedAt', $guess);

        $guesses = $guess->getValidatorGuesses();
        self::assertCount(1, $guesses);
        self::assertSame(DateTime::class, $guesses[0]->getConstraintClass());
        self::assertSame(['format' => 'd/m/Y H:i:s'], $guesses[0]->getArguments());
    }
}
