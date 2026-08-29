<?php

namespace Jane\Component\OpenApi3\Tests;

use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;

/**
 * Runtime test for generated endpoints returning a raw json_decode() of the
 * response body: malformed JSON must fail loudly instead of silently
 * returning null.
 */
class MalformedJsonRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/response-reference';

    public static function setUpBeforeClass(): void
    {
        $expectedDir = self::FIXTURE_DIR . '/generated';

        require_once $expectedDir . '/Runtime/Client/Client.php';
        require_once $expectedDir . '/Runtime/Client/Endpoint.php';
        require_once $expectedDir . '/Runtime/Client/BaseEndpoint.php';
        require_once $expectedDir . '/Runtime/Client/EndpointTrait.php';
        require_once $expectedDir . '/Endpoint/TestRefArray.php';
    }

    public function testMalformedJsonThrowsRuntimeException(): void
    {
        $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '{"broken": ');

        try {
            $endpoint->parseResponse($response, new Serializer([], []));
            self::fail('Expected a RuntimeException for malformed JSON.');
        } catch (\RuntimeException $exception) {
            self::assertStringContainsString('Malformed JSON response body', $exception->getMessage());
            self::assertInstanceOf(\JsonException::class, $exception->getPrevious());
        }
    }

    public function testValidJsonIsStillDecoded(): void
    {
        $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '[{"id": 1}]');

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertEquals([(object) ['id' => 1]], $result);
    }

    public function testValidScalarJsonRootIsStillDecoded(): void
    {
        $endpoint = new \Jane\Component\OpenApi3\Tests\Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '0');

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertSame(0, $result);
    }
}
