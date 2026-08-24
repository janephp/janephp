<?php

namespace Jane\Component\OpenApi2\Tests;

use Docker\Api\Model\ContainersCreatePostBody;
use Docker\Api\Normalizer\JaneObjectNormalizer;
use Docker\Api\Runtime\JsonObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Regression tests for GH#700 / GH#680: objects and maps must serialize as JSON
 * objects ({}) even when empty, not as arrays ([]).
 */
class EmptyObjectNormalizationTest extends TestCase
{
    public function testEmptyAdditionalPropertiesMapIsEncodedAsJsonObject(): void
    {
        $body = new ContainersCreatePostBody();
        $body->setExposedPorts(new JsonObject());

        $data = $this->createSerializer()->normalize($body, 'json');

        self::assertInstanceOf(JsonObject::class, $data['ExposedPorts']);
        self::assertStringContainsString('"ExposedPorts":{}', json_encode($data));
        self::assertStringNotContainsString('"ExposedPorts":[]', json_encode($data));
    }

    public function testMapRoundTripIsSymmetric(): void
    {
        $serializer = $this->createSerializer();

        $body = $serializer->denormalize(['ExposedPorts' => []], ContainersCreatePostBody::class, 'json');

        self::assertInstanceOf(JsonObject::class, $body->getExposedPorts());
        self::assertSame([], iterator_to_array($body->getExposedPorts()));

        $data = $serializer->normalize($body, 'json');

        self::assertStringContainsString('"ExposedPorts":{}', json_encode($data));
    }

    public function testFilledAdditionalPropertiesMapIsEncodedAsJsonObject(): void
    {
        $ports = new JsonObject();
        $ports['80/tcp'] = new JsonObject();

        $body = new ContainersCreatePostBody();
        $body->setExposedPorts($ports);

        $data = json_encode($this->createSerializer()->normalize($body, 'json'));

        self::assertStringContainsString('"ExposedPorts":{"80\/tcp":{}}', $data);
    }

    public function testEmptyNestedModelObjectIsEncodedAsJsonObject(): void
    {
        $body = new ContainersCreatePostBody();
        $body->setHealthcheck(new \Docker\Api\Model\HealthConfig());

        $data = json_encode($this->createSerializer()->normalize($body, 'json'));

        self::assertStringContainsString('"Healthcheck":{}', $data);
        self::assertStringNotContainsString('"Healthcheck":[]', $data);
    }

    private function createSerializer(): Serializer
    {
        return new Serializer([new JaneObjectNormalizer()], [new JsonEncoder()]);
    }
}
