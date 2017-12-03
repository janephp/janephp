<?php

namespace Joli\Jane\Runtime\Tests;

use Joli\Jane\Runtime\Reference;

class ReferenceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider resolveProvider
     */
    public function testResolve($reference, $origin, $expected, $denormalizerCallback)
    {
        $reference = new Reference($reference, $origin);

        self::assertEquals($expected, $reference->resolve($denormalizerCallback));
    }

    public function resolveProvider()
    {
        return [
            ['#', __DIR__ . '/schema.json', json_decode(file_get_contents(__DIR__ . '/schema.json')), null],
            [
                'http://json-schema.org/draft-04/schema#/id',
                __DIR__ . '/schema.json',
                'http://json-schema.org/draft-04/schema#',
                null
            ]
        ];
    }
}
