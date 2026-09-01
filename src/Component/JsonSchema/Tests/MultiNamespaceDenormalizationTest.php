<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Tests\Expected\Schema1\Model\Test;
use Jane\Component\JsonSchema\Tests\Expected\Schema1\Normalizer\JaneObjectNormalizer;
use Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo;
use Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Only the Schema1 proxy normalizer is registered in the serializer: it must be able to
 * handle models from other schemas (directly and transitively) on its own.
 *
 * @see https://github.com/janephp/janephp/issues/585
 */
class MultiNamespaceDenormalizationTest extends TestCase
{
    public function testDenormalizeModelsFromOtherSchemasWithASingleProxyNormalizer(): void
    {
        $serializer = new Serializer([new JaneObjectNormalizer()], [new JsonEncoder()]);

        /** @var Test $test */
        $test = $serializer->deserialize('{"foo":{"foo":"foo-value","bar":{"bar":"bar-value"}}}', Test::class, 'json');

        self::assertInstanceOf(Test::class, $test);
        self::assertInstanceOf(Foo::class, $test->foo);
        self::assertSame('foo-value', $test->foo->foo);
        self::assertInstanceOf(Bar::class, $test->foo->bar);
        self::assertSame('bar-value', $test->foo->bar->bar);
    }

    public function testNormalizeModelsFromOtherSchemasWithASingleProxyNormalizer(): void
    {
        $serializer = new Serializer([new JaneObjectNormalizer()], [new JsonEncoder()]);

        $bar = new Bar();
        $bar->bar = 'bar-value';
        $foo = new Foo();
        $foo->foo = 'foo-value';
        $foo->bar = $bar;
        $test = new Test();
        $test->foo = $foo;

        self::assertSame('{"foo":{"foo":"foo-value","bar":{"bar":"bar-value"}}}', $serializer->serialize($test, 'json'));
    }
}
