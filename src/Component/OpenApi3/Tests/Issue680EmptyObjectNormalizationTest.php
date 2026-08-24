<?php

namespace Jane\Component\OpenApi3\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Empty object request bodies must be sent as a JSON object ('{}'), not as an
 * empty JSON array ('[]').
 *
 * The issue-680 fixture is generated into an isolated namespace, as generated
 * clients usually share their namespace across fixtures which would cause
 * class redeclaration conflicts.
 *
 * @see https://github.com/janephp/janephp/issues/680
 */
class Issue680EmptyObjectNormalizationTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/issue-680';

    private function createSerializer(): Serializer
    {
        $dir = self::FIXTURE_DIR . '/expected';

        foreach ([
            'Model/TestBody',
            'Runtime/Normalizer/CheckArray',
            'Runtime/Normalizer/ValidatorTrait',
            'Runtime/Normalizer/ReferenceNormalizer',
            'Normalizer/TestBodyNormalizer',
            'Normalizer/JaneObjectNormalizer',
            'Runtime/Client/Endpoint',
            'Runtime/Client/EndpointTrait',
            'Runtime/Client/BaseEndpoint',
            'Runtime/Client/JsonPayload',
            'Endpoint/PostTest',
        ] as $file) {
            require_once $dir . '/' . $file . '.php';
        }

        return new Serializer(
            [new ArrayDenormalizer(), new Issue680\Normalizer\JaneObjectNormalizer()],
            [new JsonEncoder()]
        );
    }

    public function testEmptyObjectRequestBodyIsSentAsJsonObject(): void
    {
        $serializer = $this->createSerializer();

        [, $body] = (new Issue680\Endpoint\PostTest(new Issue680\Model\TestBody()))->getBody($serializer);

        self::assertSame('{}', $body);
    }

    public function testNullPropertiesAreOmittedAndStillProduceAnJsonObject(): void
    {
        $serializer = $this->createSerializer();

        $bodyDto = new Issue680\Model\TestBody();
        $bodyDto->setItems(null);

        [, $body] = (new Issue680\Endpoint\PostTest($bodyDto))->getBody($serializer);

        self::assertSame('{}', $body);
    }

    public function testPopulatedObjectRequestBodyWireFormat(): void
    {
        $serializer = $this->createSerializer();

        $bodyDto = new Issue680\Model\TestBody();
        $bodyDto->setItems(['foo', 'bar']);

        [, $body] = (new Issue680\Endpoint\PostTest($bodyDto))->getBody($serializer);

        self::assertSame('{"items":["foo","bar"]}', $body);
    }
}
