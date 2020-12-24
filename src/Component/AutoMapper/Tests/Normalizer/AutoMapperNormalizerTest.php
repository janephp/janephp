<?php

namespace Jane\Component\AutoMapper\Tests\Normalizer;

use Jane\Component\AutoMapper\Normalizer\AutoMapperNormalizer;
use Jane\Component\AutoMapper\Tests\AutoMapperBaseTest;
use Jane\Component\AutoMapper\Tests\Fixtures;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
class AutoMapperNormalizerTest extends AutoMapperBaseTest
{
    /** @var AutoMapperNormalizer */
    protected $normalizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->normalizer = new AutoMapperNormalizer($this->autoMapper);
    }

    public function testNormalize(): void
    {
        $object = new Fixtures\User(1, 'Jack', 37);
        $expected = ['id' => 1, 'name' => 'Jack', 'age' => 37];

        $normalized = $this->normalizer->normalize($object);
        self::assertIsArray($normalized);
        self::assertEquals($expected['id'], $normalized['id']);
        self::assertEquals($expected['name'], $normalized['name']);
        self::assertEquals($expected['age'], $normalized['age']);
    }

    public function testDenormalize(): void
    {
        $source = ['id' => 1, 'name' => 'Jack', 'age' => 37];

        /** @var Fixtures\User $denormalized */
        $denormalized = $this->normalizer->denormalize($source, Fixtures\User::class);
        self::assertInstanceOf(Fixtures\User::class, $denormalized);
        self::assertEquals($source['id'], $denormalized->getId());
        self::assertEquals($source['name'], $denormalized->name);
        self::assertEquals($source['age'], $denormalized->age);
    }

    public function testSupportsNormalization(): void
    {
        self::assertFalse($this->normalizer->supportsNormalization(['foo']));
        self::assertFalse($this->normalizer->supportsNormalization('{"foo":1}'));

        $object = new Fixtures\User(1, 'Jack', 37);
        self::assertTrue($this->normalizer->supportsNormalization($object));

        $stdClass = new \stdClass();
        $stdClass->id = 1;
        $stdClass->name = 'Jack';
        $stdClass->age = 37;
        self::assertFalse($this->normalizer->supportsNormalization($stdClass));
    }

    public function testSupportsDenormalization(): void
    {
        self::assertTrue($this->normalizer->supportsDenormalization(['foo' => 1], 'array'));
        self::assertTrue($this->normalizer->supportsDenormalization(['foo' => 1], 'json'));

        $user = ['id' => 1, 'name' => 'Jack', 'age' => 37];
        self::assertTrue($this->normalizer->supportsDenormalization($user, Fixtures\User::class));
        self::assertTrue($this->normalizer->supportsDenormalization($user, \stdClass::class));
    }

    public function testNormalizeWithNoReturnType(): void
    {
        $object = new Fixtures\UserWithYearOfBirth(1, 'Foo', 37);
        $expected = ['id' => 1, 'name' => 'Foo', 'age' => 37, 'yearOfBirth' => (((int) date('Y')) - 37)];

        $normalized = $this->normalizer->normalize($object, null, ['groups' => ['read']]);
        self::assertIsArray($normalized);
        self::assertEquals($expected['id'], $normalized['id']);
        self::assertEquals($expected['name'], $normalized['name']);
        self::assertEquals($expected['age'], $normalized['age']);
        self::assertEquals($expected['yearOfBirth'], $normalized['yearOfBirth']);
    }
}
