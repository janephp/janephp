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
        return new Serializer(
            [new DiscriminatorExpected\Normalizer\JaneObjectNormalizer()],
            [new JsonEncoder()]
        );
    }

    public function testDenormalizationDispatchesToMappedChildOnParentType(): void
    {
        $pet = $this->createSerializer()->deserialize(
            '{"name": "Felix", "petType": "cat", "huntingSkill": "adventurous"}',
            DiscriminatorExpected\Model\Pet::class,
            'json'
        );

        self::assertInstanceOf(DiscriminatorExpected\Model\Cat::class, $pet);
        self::assertSame('Felix', $pet->getName());
        self::assertSame('adventurous', $pet->getHuntingSkill());

        $pet = $this->createSerializer()->deserialize(
            '{"name": "Rex", "petType": "dog", "packSize": 3}',
            DiscriminatorExpected\Model\Pet::class,
            'json'
        );

        self::assertInstanceOf(DiscriminatorExpected\Model\Dog::class, $pet);
        self::assertSame('Rex', $pet->getName());
        self::assertSame(3, $pet->getPackSize());
    }

    public function testNormalizationOfChildThroughParentNormalizerDelegates(): void
    {
        $serializer = $this->createSerializer();
        $cat = $serializer->deserialize(
            '{"name": "Felix", "petType": "cat", "huntingSkill": "adventurous"}',
            DiscriminatorExpected\Model\Pet::class,
            'json'
        );

        $normalized = $serializer->normalize($cat);
        self::assertIsArray($normalized);
        self::assertSame('Felix', $normalized['name']);
        self::assertSame('cat', $normalized['petType']);
        self::assertSame('adventurous', $normalized['huntingSkill']);

        $petNormalizer = new DiscriminatorExpected\Normalizer\PetNormalizer();
        $petNormalizer->setNormalizer($serializer);
        self::assertSame($normalized, $petNormalizer->normalize($cat));
    }

    public function testOneOfDiscriminatedPropertyDenormalization(): void
    {
        $fooBar = $this->createSerializer()->deserialize(
            '{"what": {"type": "bar", "title": "hello"}}',
            DiscriminatorExpected\Model\FooBar::class,
            'json'
        );

        self::assertInstanceOf(DiscriminatorExpected\Model\FooBar::class, $fooBar);
        self::assertInstanceOf(DiscriminatorExpected\Model\Bar::class, $fooBar->getWhat());
        self::assertSame('bar', $fooBar->getWhat()->getType());
        self::assertSame('hello', $fooBar->getWhat()->getTitle());

        $fooBar = $this->createSerializer()->deserialize(
            '{"what": {"type": "foo", "title": "world"}}',
            DiscriminatorExpected\Model\FooBar::class,
            'json'
        );

        self::assertInstanceOf(DiscriminatorExpected\Model\Foo::class, $fooBar->getWhat());
    }
}
