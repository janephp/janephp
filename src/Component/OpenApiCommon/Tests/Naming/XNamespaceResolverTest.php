<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Naming;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use PHPUnit\Framework\TestCase;

final class XNamespaceResolverTest extends TestCase
{
    public static function provideValues(): iterable
    {
        yield 'single segment' => ['Users', ['Users']];
        yield 'backslash separated segments' => ['Users\Admin', ['Users', 'Admin']];
        yield 'slash separated segments' => ['Users/Admin', ['Users', 'Admin']];
        yield 'mixed separators' => ['Users\Admin/Deep', ['Users', 'Admin', 'Deep']];
        yield 'sanitized segments' => ['users-area\admin zone', ['UsersArea', 'AdminZone']];
        yield 'reserved word is prefixed' => ['list', ['_List']];
        yield 'leading digit is prefixed' => ['2fa', ['_2fa']];
        yield 'multiple leading digits are prefixed' => ['42', ['_42']];
    }

    /**
     * @dataProvider provideValues
     */
    public function testResolveSplitsAndSanitizesSegments(string $value, array $expected): void
    {
        self::assertSame($expected, (new XNamespaceResolver())->resolve($value));
    }

    public static function provideInvalidValues(): iterable
    {
        yield 'empty string' => [''];
        yield 'separators only' => ['\\//'];
        yield 'blank segments only' => [' \\ // '];
    }

    /**
     * @dataProvider provideInvalidValues
     */
    public function testResolveReturnsEmptyArrayForUnusableValues(string $value): void
    {
        self::assertSame([], (new XNamespaceResolver())->resolve($value));
    }

    public function testResolveFromObjectReadsExtensionStorage(): void
    {
        $resolver = new XNamespaceResolver();
        $object = new JsonSchema();
        $object->offsetSet('x-namespace', 'Users\Admin');

        self::assertSame(['Users', 'Admin'], $resolver->resolveFromObject($object));
    }

    public function testResolveFromObjectIgnoresObjectsWithoutTheAttribute(): void
    {
        $resolver = new XNamespaceResolver();

        self::assertSame([], $resolver->resolveFromObject(new JsonSchema()));
        self::assertSame([], $resolver->resolveFromObject(new \stdClass()));

        $invalidValue = new JsonSchema();
        $invalidValue->offsetSet('x-namespace', 42);

        self::assertSame([], $resolver->resolveFromObject($invalidValue));
    }

    public function testSubNamespaceSuffixBuildsPrefixedNamespace(): void
    {
        $classGuess = new ClassGuess(new \stdClass(), '#/components/schemas/User', 'User');
        $classGuess->setSubNamespace(['Users', 'Admin']);

        self::assertSame('\\Users\\Admin', XNamespaceResolver::subNamespaceSuffix($classGuess));
    }

    public function testSubNamespaceSuffixIsEmptyForFlatLayout(): void
    {
        $classGuess = new ClassGuess(new \stdClass(), '#/components/schemas/User', 'User');

        self::assertSame('', XNamespaceResolver::subNamespaceSuffix($classGuess));
    }
}
