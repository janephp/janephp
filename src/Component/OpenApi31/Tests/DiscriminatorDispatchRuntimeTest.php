<?php

namespace Jane\Component\OpenApi31\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Functional check of OpenAPI 3.1 discriminator handling on generated code:
 * denormalizing a parent model must dispatch to the mapped child class, and
 * normalizing a child through its parent normalizer must delegate.
 */
class DiscriminatorDispatchRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/discriminator';

    /**
     * Widens literal class references so analysis cannot bind to classes
     * excluded from PHPStan's scan (generated-code fixtures).
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    public static function setUpBeforeClass(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/expected';

        require_once $expectedDir . '/Runtime/AdditionalAndPatternProperties.php';
        require_once $expectedDir . '/Runtime/AdditionalPropertiesInterface.php';
        require_once $expectedDir . '/Model/Pet.php';
        require_once $expectedDir . '/Model/Cat.php';
        require_once $expectedDir . '/Model/Dog.php';
        require_once $expectedDir . '/Model/Foo.php';
        require_once $expectedDir . '/Model/Bar.php';
        require_once $expectedDir . '/Model/FooBar.php';
        require_once $expectedDir . '/Runtime/Normalizer/CheckArray.php';
        require_once $expectedDir . '/Runtime/Normalizer/ValidatorTrait.php';
        require_once $expectedDir . '/Normalizer/PetNormalizer.php';
        require_once $expectedDir . '/Normalizer/CatNormalizer.php';
        require_once $expectedDir . '/Normalizer/DogNormalizer.php';
        require_once $expectedDir . '/Normalizer/FooNormalizer.php';
        require_once $expectedDir . '/Normalizer/BarNormalizer.php';
        require_once $expectedDir . '/Normalizer/FooBarNormalizer.php';
        require_once $expectedDir . '/Normalizer/JaneObjectNormalizer.php';
    }

    private function createSerializer(): Serializer
    {
        $normalizerClass = self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Normalizer\JaneObjectNormalizer');

        return new Serializer(
            [new $normalizerClass()],
            [new JsonEncoder()]
        );
    }

    public function testDenormalizationDispatchesToMappedChildOnParentType(): void
    {
        $pet = $this->createSerializer()->deserialize(
            '{"name": "Felix", "petType": "cat", "huntingSkill": "adventurous"}',
            self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet'),
            'json'
        );

        self::assertInstanceOf(self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Cat'), $pet);
        self::assertSame('Felix', $pet->getName());
        self::assertSame('adventurous', $pet->getHuntingSkill());

        $pet = $this->createSerializer()->deserialize(
            '{"name": "Rex", "petType": "dog", "packSize": 3}',
            self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet'),
            'json'
        );

        self::assertInstanceOf(self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Dog'), $pet);
        self::assertSame('Rex', $pet->getName());
        self::assertSame(3, $pet->getPackSize());
    }

    public function testNormalizationOfChildThroughParentNormalizerDelegates(): void
    {
        $serializer = $this->createSerializer();
        $cat = $serializer->deserialize(
            '{"name": "Felix", "petType": "cat", "huntingSkill": "adventurous"}',
            self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Pet'),
            'json'
        );

        $normalized = $serializer->normalize($cat);
        self::assertIsArray($normalized);
        self::assertSame('Felix', $normalized['name']);
        self::assertSame('cat', $normalized['petType']);
        self::assertSame('adventurous', $normalized['huntingSkill']);

        $petNormalizerClass = self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Normalizer\PetNormalizer');
        $petNormalizer = new $petNormalizerClass();
        $petNormalizer->setNormalizer($serializer);
        self::assertSame($normalized, $petNormalizer->normalize($cat));
    }

    public function testOneOfDiscriminatedPropertyDenormalization(): void
    {
        $fooBar = $this->createSerializer()->deserialize(
            '{"what": {"type": "bar", "title": "hello"}}',
            self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar'),
            'json'
        );

        self::assertInstanceOf(self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar'), $fooBar);
        self::assertInstanceOf(self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Bar'), $fooBar->getWhat());
        self::assertSame('bar', $fooBar->getWhat()->getType());
        self::assertSame('hello', $fooBar->getWhat()->getTitle());

        $fooBar = $this->createSerializer()->deserialize(
            '{"what": {"type": "foo", "title": "world"}}',
            self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\FooBar'),
            'json'
        );

        self::assertInstanceOf(self::widenedClassName('Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model\Foo'), $fooBar->getWhat());
    }
}
