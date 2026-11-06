<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Generator\ValidationOption;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ValidationOptionTest extends TestCase
{
    public static function caseProvider(): \Generator
    {
        yield 'NormalizeOnly' => [ValidationOption::NormalizeOnly];
        yield 'DenormalizeOnly' => [ValidationOption::DenormalizeOnly];
        yield 'Both' => [ValidationOption::Both];
    }

    public static function invalidValueProvider(): \Generator
    {
        yield 'both' => ['both'];
        yield '1' => [1];
        yield '0' => [0];
    }

    public function testFalseIsReturnedUnchanged(): void
    {
        self::assertFalse(ValidationOption::fromConfig(false));
    }

    #[DataProvider('caseProvider')]
    public function testEnumCasesAreReturnedUnchanged(ValidationOption $case): void
    {
        self::assertSame($case, ValidationOption::fromConfig($case));
    }

    public function testTrueConvertsToBothAndTriggersADeprecation(): void
    {
        $this->expectUserDeprecationMessage('Since jane-php/json-schema 8.2: Passing true to the "validation" option is deprecated, use ValidationOption::Both instead.');

        self::assertSame(ValidationOption::Both, ValidationOption::fromConfig(true));
    }

    public function testNullConvertsToFalseAndTriggersADeprecation(): void
    {
        $this->expectUserDeprecationMessage('Since jane-php/json-schema 8.2: Passing null to the "validation" option is deprecated, use false instead.');

        self::assertFalse(ValidationOption::fromConfig(null));
    }

    #[DataProvider('invalidValueProvider')]
    public function testUnsupportedValuesThrow(mixed $value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The "validation" option must be false or a ValidationOption enum case ("NormalizeOnly", "DenormalizeOnly", "Both"); ');

        ValidationOption::fromConfig($value);
    }

    public function testNormalizeOnlyValidatesOnlyNormalization(): void
    {
        self::assertTrue(ValidationOption::NormalizeOnly->validatesNormalization());
        self::assertFalse(ValidationOption::NormalizeOnly->validatesDenormalization());
    }

    public function testDenormalizeOnlyValidatesOnlyDenormalization(): void
    {
        self::assertFalse(ValidationOption::DenormalizeOnly->validatesNormalization());
        self::assertTrue(ValidationOption::DenormalizeOnly->validatesDenormalization());
    }

    public function testBothValidatesBothDirections(): void
    {
        self::assertTrue(ValidationOption::Both->validatesNormalization());
        self::assertTrue(ValidationOption::Both->validatesDenormalization());
    }
}
