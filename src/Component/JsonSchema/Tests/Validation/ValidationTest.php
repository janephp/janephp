<?php

namespace Jane\Component\JsonSchema\Tests\Validation;

use Jane\Component\JsonSchema\Console\Command\GenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoader;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\ArrayObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\FormatObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\NumericObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\ObjectObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\RootLevel;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\Shop;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\SimpleObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\SimpleObjectSubProperty;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\StringObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\TypeObject;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Model\VerifyNullableStringPropertyWithMinLengthValidatesCorrectly;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\ArrayObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\FormatObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\NumericObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\ObjectObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\RootLevelNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\RootSubLevel1Normalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\RootSubLevel2Normalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\ShopNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\SimpleObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\SimpleObjectSubPropertyNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\StringObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\TypeObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Normalizer\VerifyNullableStringPropertyWithMinLengthValidatesCorrectlyNormalizer;
use Jane\Component\JsonSchema\Tests\Validation\Generated\Runtime\Normalizer\ValidationException;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\Hostname;

class ValidationTest extends TestCase
{
    public function testValidation(): void
    {
        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader());
        $inputArray = new ArrayInput([
            '--config-file' => __DIR__ . \DIRECTORY_SEPARATOR . '.jane',
        ], $command->getDefinition());

        $command->execute($inputArray, new NullOutput());

        // 2. Numeric
        $this->numericValidation();

        // 3. String
        $this->stringValidation();

        // 4. Array
        $this->arrayValidation();

        // 5. Format
        $this->formatValidation();

        // 6. Object
        $this->objectValidation();

        // 7. Type
        $this->typeValidation();

        // 8. Normalize
        $this->normalizeValidation();

        // 9. Nullable
        $this->nullableValidation();

        // 10. SubModel
        $this->subModelValidation();

        // 11. Nested SubModel
        $this->nestedSubModelValidation();

        // 12.
        $this->verifyNullableStringPropertyWithMinLengthValidatesCorrectly();
    }

    private function numericValidation(): void
    {
        $normalizer = new NumericObjectNormalizer();

        $data = $normalizer->denormalize([
            'numericMultipleOf' => 10,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericMultipleOf' => 11,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericMultipleOf]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'numericMaximum' => 5,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $data = $normalizer->denormalize([
            'numericMaximum' => 10,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericMaximum' => 11,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericMaximum]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'numericExclusiveMaximum' => 5,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericExclusiveMaximum' => 10,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericExclusiveMaximum]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericExclusiveMaximum' => 11,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericExclusiveMaximum]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'numericMinimum' => 11,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $data = $normalizer->denormalize([
            'numericMinimum' => 10,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericMinimum' => 5,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericMinimum]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'numericExclusiveMinimum' => 11,
        ], NumericObject::class);
        $this->assertInstanceOf(NumericObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericExclusiveMinimum' => 10,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericExclusiveMinimum]', $caughtException->getViolationList()->get(0)->getPropertyPath());
        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numericExclusiveMinimum' => 5,
            ], NumericObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numericExclusiveMinimum]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function stringValidation(): void
    {
        $normalizer = new StringObjectNormalizer();

        $caughtException = null;
        try {
            $normalizer->denormalize([], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(2, $caughtException->getViolationList()->count());
        $this->assertEquals('[enumString]', $caughtException->getViolationList()->get(0)->getPropertyPath());
        $this->assertEquals('[enumNoType]', $caughtException->getViolationList()->get(1)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'random',
                'enumNoType' => 'bar',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[enumString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
            'constString' => 'Michel',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'constString' => 'Gérard',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[constString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
            'minLengthString' => 'azertyuiop',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'minLengthString' => 'azerty',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[minLengthString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
            'maxLengthString' => 'azerty',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'maxLengthString' => 'azertyazertyazertyazertyazertyazertyazertyazerty',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[maxLengthString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
            'minMaxLengthString' => 'azertyuiop',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'minMaxLengthString' => 'azertyazertyazertyazertyazertyazertyazertyazerty',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[minMaxLengthString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'minMaxLengthString' => 'azerty',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[minMaxLengthString]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'enumString' => 'foo',
            'enumNoType' => 'bar',
            'patternString' => '655f705b-03b5-4c26-9181-abcae45f8f26',
        ], StringObject::class);
        $this->assertInstanceOf(StringObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'enumString' => 'foo',
                'enumNoType' => 'bar',
                'patternString' => 'éééééééééééé',
            ], StringObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[patternString]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function arrayValidation(): void
    {
        $normalizer = new ArrayObjectNormalizer();

        $data = $normalizer->denormalize([
            'arrayMinItems' => ['foo', 'bar', 'baz'],
        ], ArrayObject::class);
        $this->assertInstanceOf(ArrayObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayMinItems' => [],
            ], ArrayObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[arrayMinItems]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'arrayMaxItems' => ['foo', 'bar', 'baz'],
        ], ArrayObject::class);
        $this->assertInstanceOf(ArrayObject::class, $data);

        $data = $normalizer->denormalize([
            'arrayMaxItems' => [],
        ], ArrayObject::class);
        $this->assertInstanceOf(ArrayObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayMaxItems' => ['foo', 'bar', 'baz', 'foo', 'bar', 'baz'],
            ], ArrayObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[arrayMaxItems]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'arrayMinMaxItems' => ['foo', 'bar', 'baz'],
        ], ArrayObject::class);
        $this->assertInstanceOf(ArrayObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayMinMaxItems' => [],
            ], ArrayObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[arrayMinMaxItems]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayMinMaxItems' => ['foo', 'bar', 'baz', 'foo', 'bar', 'baz'],
            ], ArrayObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[arrayMinMaxItems]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'arrayUnique' => ['foo', 'bar', 'baz'],
        ], ArrayObject::class);
        $this->assertInstanceOf(ArrayObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayUnique' => ['foo', 'foo', 'bar', 'baz'],
            ], ArrayObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());

        $propertyPath = $caughtException->getViolationList()->get(0)->getPropertyPath();
        $this->assertMatchesRegularExpression('/\[arrayUnique\](\[1\])?/', $propertyPath);
    }

    private function formatValidation(): void
    {
        $normalizer = new FormatObjectNormalizer();

        $data = $normalizer->denormalize([
            'emailFormat' => 'foo@google.com',
        ], FormatObject::class);
        $this->assertInstanceOf(FormatObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'emailFormat' => 'google.com',
            ], FormatObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[emailFormat]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        if (class_exists(Hostname::class)) {
            $data = $normalizer->denormalize([
                'hostnameFormat' => 'google.com',
            ], FormatObject::class);
            $this->assertInstanceOf(FormatObject::class, $data);

            $caughtException = null;
            try {
                $normalizer->denormalize([
                    'hostnameFormat' => 'foo@google.com',
                ], FormatObject::class);
            } catch (ValidationException $exception) {
                $caughtException = $exception;
            }

            $this->assertInstanceOf(ValidationException::class, $caughtException);
            $this->assertEquals(400, $caughtException->getCode());
            $this->assertEquals(1, $caughtException->getViolationList()->count());
            $this->assertEquals('[hostnameFormat]', $caughtException->getViolationList()->get(0)->getPropertyPath());
        }

        $data = $normalizer->denormalize([
            'ipv4Format' => '1.2.3.4',
        ], FormatObject::class);
        $this->assertInstanceOf(FormatObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'ipv4Format' => '270.2.3.4',
            ], FormatObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[ipv4Format]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'ipv6Format' => '2001:db8:0:85a3:0:0:ac1f:8001',
        ], FormatObject::class);
        $this->assertInstanceOf(FormatObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'ipv6Format' => 'db8:0:85a3:0:0:ac1f:8001',
            ], FormatObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[ipv6Format]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'uuidFormat' => '8309e3b3-0c6c-4ab8-b450-e7564f6d07fd',
        ], FormatObject::class);
        $this->assertInstanceOf(FormatObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'uuidFormat' => '8309e3b3-0c6c-4ab8-b450-e7564f6',
            ], FormatObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[uuidFormat]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function objectValidation(): void
    {
        $normalizer = new ObjectObjectNormalizer();

        $data = $normalizer->denormalize([
            'stringProperty' => 'foo',
        ], ObjectObject::class);
        $this->assertInstanceOf(ObjectObject::class, $data);

        $data = $normalizer->denormalize([
            'stringProperty' => 'foo',
            'stringProperty2' => 'bar',
            'stringProperty3' => 'baz',
            'stringProperty4' => 'toto',
        ], ObjectObject::class);
        $this->assertInstanceOf(ObjectObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([], ObjectObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('', $caughtException->getViolationList()->get(0)->getPropertyPath());
        $this->assertInstanceOf(Count::class, $caughtException->getViolationList()->get(0)->getConstraint());

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'stringProperty' => 'foo',
                'stringProperty2' => 'bar',
                'stringProperty3' => 'baz',
                'stringProperty4' => 'toto',
                'stringProperty5' => 'tototo',
                'stringProperty6' => 'totototo',
            ], ObjectObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('', $caughtException->getViolationList()->get(0)->getPropertyPath());
        $this->assertInstanceOf(Count::class, $caughtException->getViolationList()->get(0)->getConstraint());
    }

    private function typeValidation(): void
    {
        $normalizer = new TypeObjectNormalizer();

        $data = $normalizer->denormalize([
            'stringProperty' => 'foo',
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'stringProperty' => 1,
            ], TypeObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[stringProperty]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'integerProperty' => 1,
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'integerProperty' => 'foo',
            ], TypeObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[integerProperty]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'booleanProperty' => true,
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'booleanProperty' => 1.0,
            ], TypeObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[booleanProperty]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'arrayProperty' => ['foo'],
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'arrayProperty' => 1,
            ], TypeObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[arrayProperty]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $data = $normalizer->denormalize([
            'numberProperty' => 1.5,
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $data = $normalizer->denormalize([
            'numberProperty' => 1,
        ], TypeObject::class);
        $this->assertInstanceOf(TypeObject::class, $data);

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'numberProperty' => 'foo',
            ], TypeObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[numberProperty]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function normalizeValidation(): void
    {
        $normalizer = new FormatObjectNormalizer();

        $object = new FormatObject();
        $object->setEmailFormat('foo@google.com');
        $object->setHostnameFormat('google.com');
        $object->setIpv4Format('1.2.3.4');
        $object->setIpv6Format('2001:db8:0:85a3:0:0:ac1f:8001');
        $object->setUuidFormat('8309e3b3-0c6c-4ab8-b450-e7564f6d07fd');

        $data = $normalizer->normalize($object, 'json');
        $this->assertIsArray($data);
        $this->assertArrayHasKey('emailFormat', $data);
        $this->assertArrayHasKey('hostnameFormat', $data);
        $this->assertArrayHasKey('ipv4Format', $data);
        $this->assertArrayHasKey('ipv6Format', $data);
        $this->assertArrayHasKey('uuidFormat', $data);

        $caughtException = null;
        try {
            $object->setEmailFormat('google.com');
            $normalizer->normalize($object, 'json');
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());
        $this->assertEquals('[emailFormat]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function nullableValidation(): void
    {
        $normalizer = new ShopNormalizer();

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'name' => '',
            ], Shop::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(2, $caughtException->getViolationList()->count());
        $this->assertEquals('[name]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'name' => null,
            ], Shop::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(2, $caughtException->getViolationList()->count());
        $this->assertEquals('[name]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function subModelValidation(): void
    {
        $serializer = new Serializer([new SimpleObjectNormalizer(), new ShopNormalizer(), new SimpleObjectSubPropertyNormalizer()]);

        /** @var SimpleObject|null $simpleObject */
        $simpleObject = $serializer->denormalize([
            'label' => 'Coucou',
            'subModel' => [
                'name' => 'Appartement',
            ],
            'subProperty' => [
                'stringProperty' => 'string',
                'integerProperty' => 10,
            ],
        ], SimpleObject::class);

        $this->assertInstanceOf(SimpleObject::class, $simpleObject);
        $this->assertEquals('Coucou', $simpleObject->getLabel());
        $this->assertInstanceOf(Shop::class, $simpleObject->getSubModel());
        $this->assertEquals('Appartement', $simpleObject->getSubModel()->getName());
        $this->assertInstanceOf(SimpleObjectSubProperty::class, $simpleObject->getSubProperty());
        $this->assertEquals('string', $simpleObject->getSubProperty()->getStringProperty());
        $this->assertEquals(10, $simpleObject->getSubProperty()->getIntegerProperty());

        $caughtException = null;
        try {
            $serializer->denormalize([
                'label' => 'Coucou',
                'subModel' => [
                    'name' => null,
                ],
                'subProperty' => [
                    'stringProperty' => 'string',
                    'integerProperty' => 10,
                ],
            ], SimpleObject::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(2, $caughtException->getViolationList()->count());
        $this->assertEquals('[subModel][name]', $caughtException->getViolationList()->get(0)->getPropertyPath());
    }

    private function nestedSubModelValidation(): void
    {
        $serializer = new Serializer([new RootLevelNormalizer(), new RootSubLevel1Normalizer(), new RootSubLevel2Normalizer()]);

        /** @var RootLevel|null $rootLevelObject */
        $rootLevelObject = $serializer->denormalize([
            'subLevel-1' => [
                'subLevel-2' => [
                    'end' => 'finish',
                ],
            ],
        ], RootLevel::class);

        $this->assertInstanceOf(RootLevel::class, $rootLevelObject);
        $this->assertEquals('finish', $rootLevelObject->getSubLevel1()->getSubLevel2()->getEnd());

        $caughtException = null;
        try {
            $serializer->denormalize([
                'subLevel-1' => [
                    'subLevel-2' => null,
                ],
            ], RootLevel::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(2, $caughtException->getViolationList()->count());

        $violationList = $caughtException->getViolationList();
        $this->assertEquals($violationList[0], $violationList[1]);

        $violation = $violationList[0];
        $this->assertEquals('[subLevel-1][subLevel-2]', $violation->getPropertyPath());
        $this->assertEquals('This value should not be null.', $violation->getMessage());

        $caughtException = null;
        try {
            $serializer->denormalize([
                'subLevel-1' => [
                    'subLevel-2' => [
                        'end' => 'Finish!',
                    ],
                ],
            ], RootLevel::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        $this->assertInstanceOf(ValidationException::class, $caughtException);
        $this->assertEquals(400, $caughtException->getCode());
        $this->assertEquals(1, $caughtException->getViolationList()->count());

        $violation = $caughtException->getViolationList()[0];
        $this->assertEquals('[subLevel-1][subLevel-2][end]', $violation->getPropertyPath());
        $this->assertEquals('This value is not valid.', $violation->getMessage());
    }

    private function verifyNullableStringPropertyWithMinLengthValidatesCorrectly(): void
    {
        $normalizer = new VerifyNullableStringPropertyWithMinLengthValidatesCorrectlyNormalizer();

        $caughtException = null;
        try {
            $normalizer->denormalize([
                'name' => '',
            ], VerifyNullableStringPropertyWithMinLengthValidatesCorrectly::class);
        } catch (ValidationException $exception) {
            $caughtException = $exception;
        }

        self::assertInstanceOf(ValidationException::class, $caughtException);
        self::assertEquals(400, $caughtException->getCode());
        self::assertEquals(2, $caughtException->getViolationList()->count());
        self::assertEquals('[name]', $caughtException->getViolationList()->get(0)->getPropertyPath());

        $caughtException = null;
        $data = $normalizer->denormalize([
            'name' => null,
        ], VerifyNullableStringPropertyWithMinLengthValidatesCorrectly::class);

        self::assertInstanceOf(VerifyNullableStringPropertyWithMinLengthValidatesCorrectly::class, $data);
        self::assertNull($data->getName());
    }
}
