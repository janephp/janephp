<?php

namespace Jane\JsonSchemaRuntime\Tests;

use Jane\JsonSchemaRuntime\Reference;
use PHPUnit\Framework\TestCase;

class ReferenceTest extends TestCase
{
    /**
     * @dataProvider resolveProvider
     */
    public function testResolve($reference, $origin, $expected, $denormalizerCallback): void
    {
        $reference = new Reference($reference, $origin);

        self::assertEquals($expected, $reference->resolve($denormalizerCallback));
    }

    public function resolveProvider(): array
    {
        return [
            ['#', __DIR__ . '/schema.json', json_decode(file_get_contents(__DIR__ . '/schema.json')), null],
            [
                'http://json-schema.org/draft-04/schema#/id',
                __DIR__ . '/schema.json',
                'http://json-schema.org/draft-04/schema#',
                null,
            ],
        ];
    }
}
