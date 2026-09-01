<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Runtime test for generated endpoints returning a raw json_decode() of the
 * response body: malformed JSON must fail loudly instead of silently
 * returning null.
 */
class MalformedJsonRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/response-reference';

    private static function response(int $statusCode, string $body = '', array $headers = []): ResponseInterface
    {
        return (new MockHttpClient(new MockResponse($body, ['http_code' => $statusCode, 'response_headers' => $headers])))
            ->request('GET', 'https://example.com/test');
    }

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
        $endpoint = new Expected\ResponseReference\Endpoint\TestRefArray();
        $response = self::response(200, '{"broken": ', ['Content-Type' => 'application/json']);

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
        $endpoint = new Expected\ResponseReference\Endpoint\TestRefArray();
        $response = self::response(200, '[{"id": 1}]', ['Content-Type' => 'application/json']);

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertEquals([(object) ['id' => 1]], $result);
    }

    public function testValidScalarJsonRootIsStillDecoded(): void
    {
        $endpoint = new Expected\ResponseReference\Endpoint\TestRefArray();
        $response = self::response(200, '0', ['Content-Type' => 'application/json']);

        $result = $endpoint->parseResponse($response, new Serializer([], []));

        self::assertSame(0, $result);
    }
}
