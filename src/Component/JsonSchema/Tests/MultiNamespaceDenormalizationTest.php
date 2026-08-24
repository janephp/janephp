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
        self::assertInstanceOf(Foo::class, $test->getFoo());
        self::assertSame('foo-value', $test->getFoo()->getFoo());
        self::assertInstanceOf(Bar::class, $test->getFoo()->getBar());
        self::assertSame('bar-value', $test->getFoo()->getBar()->getBar());
    }

    public function testNormalizeModelsFromOtherSchemasWithASingleProxyNormalizer(): void
    {
        $serializer = new Serializer([new JaneObjectNormalizer()], [new JsonEncoder()]);

        $bar = new Bar();
        $bar->setBar('bar-value');
        $foo = new Foo();
        $foo->setFoo('foo-value');
        $foo->setBar($bar);
        $test = new Test();
        $test->setFoo($foo);

        self::assertSame('{"foo":{"foo":"foo-value","bar":{"bar":"bar-value"}}}', $serializer->serialize($test, 'json'));
    }
}
