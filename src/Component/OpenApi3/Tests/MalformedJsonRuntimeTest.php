<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException;
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
        $endpoint = new Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '{"broken": ');

        try {
            $endpoint->parseResponse($response, new Serializer([], []));
            self::fail('Expected a MalformedJsonException for malformed JSON.');
        } catch (MalformedJsonException $exception) {
            self::assertStringContainsString('Malformed JSON response body', $exception->getMessage());
            self::assertInstanceOf(\JsonException::class, $exception->getPrevious());
            // BC: consumers catching \RuntimeException keep working.
            self::assertInstanceOf(\RuntimeException::class, $exception);
            // ADR 0002: user-facing errors join the Jane error taxonomy.
            self::assertInstanceOf(JaneExceptionInterface::class, $exception);
        }
    }

    public function testValidJsonIsStillDecoded(): void
    {
        $endpoint = new Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '[{"id": 1}]');

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertEquals([(object) ['id' => 1]], $result);
    }

    public function testValidScalarJsonRootIsStillDecoded(): void
    {
        $endpoint = new Expected\Endpoint\TestRefArray();
        $response = new Response(200, ['Content-Type' => 'application/json'], '0');

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertSame(0, $result);
    }
}
