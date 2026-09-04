<?php

namespace Jane\Component\OpenApi2\Tests;

use Docker\Api\Model\NetworkSettings;
use Docker\Api\Model\PortBinding;
use Docker\Api\Normalizer\JaneObjectNormalizer;
use Docker\Api\Runtime\JsonObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Regression tests for GH#559: null entries inside a map of nullable arrays
 * must not crash the normalizer ("foreach() argument must be of type
 * array|object, null given") and must round-trip as null.
 */
class NullableMapEntryNormalizationTest extends TestCase
{
    public function testDenormalizeMapWithNullEntry(): void
    {
        $settings = $this->createSerializer()->denormalize([
            'Ports' => [
                '9000/tcp' => null,
                '80/tcp' => [
                    ['HostIp' => '0.0.0.0', 'HostPort' => '80'],
                ],
            ],
        ], NetworkSettings::class, 'json');

        self::assertNull($settings->getPorts()['9000/tcp']);

        $bindings = $settings->getPorts()['80/tcp'];
        self::assertIsArray($bindings);
        self::assertInstanceOf(PortBinding::class, $bindings[0]);
    }

    public function testNormalizeModelWithNullMapEntry(): void
    {
        $bindings = new JsonObject();
        $bindings[] = (new PortBinding())->setHostIp('0.0.0.0')->setHostPort('80');

        $ports = new JsonObject();
        $ports['9000/tcp'] = null;
        $ports['80/tcp'] = $bindings;

        $settings = new NetworkSettings();
        $settings->setPorts($ports);

        $data = json_encode($this->createSerializer()->normalize($settings, 'json'));

        self::assertStringContainsString('"9000\/tcp":null', $data);
    }

    private function createSerializer(): Serializer
    {
        return new Serializer([new JaneObjectNormalizer()], [new JsonEncoder()]);
    }
}
