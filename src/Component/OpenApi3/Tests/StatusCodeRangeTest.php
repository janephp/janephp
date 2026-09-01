<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\Tests\StatusCodeRange\Endpoint\GetFoo;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\ClientErrorException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\ClientException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\GetFooClientErrorException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\GetFooNotFoundException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\GetFooServerErrorException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\ServerErrorException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception\ServerException;
use Jane\Component\OpenApi3\Tests\StatusCodeRange\Model\Message;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @see https://github.com/janephp/janephp/issues/724
 */
class StatusCodeRangeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/status-code-range/expected';

    protected function setUp(): void
    {
        foreach ([
            'Runtime/AdditionalPropertiesInterface',
            'Runtime/AdditionalAndPatternProperties',
            'Model/Message',
            'Runtime/Client/Client',
            'Runtime/Client/Endpoint',
            'Runtime/Client/EndpointTrait',
            'Runtime/Client/BaseEndpoint',
            'Endpoint/GetFoo',
            'Exception/ApiException',
            'Exception/ClientException',
            'Exception/ServerException',
            'Exception/WithResponseInterface',
            'Exception/ClientErrorException',
            'Exception/ServerErrorException',
            'Exception/NotFoundException',
            'Exception/GetFooNotFoundException',
            'Exception/GetFooClientErrorException',
            'Exception/GetFooServerErrorException',
        ] as $file) {
            require_once self::FIXTURE_DIR . '/' . $file . '.php';
        }
    }

    private function parse(ResponseInterface $response, ?SerializerInterface $serializer = null): mixed
    {
        $endpoint = new GetFoo();

        return $endpoint->parseResponse($response, $serializer ?? $this->createMock(SerializerInterface::class));
    }

    private static function response(int $statusCode, string $body = '', array $headers = []): ResponseInterface
    {
        return (new MockHttpClient(new MockResponse($body, ['http_code' => $statusCode, 'response_headers' => $headers])))
            ->request('GET', 'https://example.com/foo');
    }

    public function testExactStatusCodeTakesPrecedenceOverRange(): void
    {
        $response = self::response(404, '"not found"', ['Content-Type' => 'application/json']);

        try {
            $this->parse($response);
            self::fail('No exception thrown for documented exact status.');
        } catch (GetFooNotFoundException $e) {
            self::assertSame('Not found', $e->getMessage());
            self::assertSame($response, $e->getResponse());
        }
    }

    public function testClientErrorRangeCatchesAll4xxStatuses(): void
    {
        foreach ([400, 409, 422, 499] as $statusCode) {
            $response = self::response($statusCode);

            try {
                $this->parse($response);
                self::fail(\sprintf('No exception thrown for status %d.', $statusCode));
            } catch (GetFooClientErrorException $e) {
                self::assertInstanceOf(ClientErrorException::class, $e);
                self::assertInstanceOf(ClientException::class, $e);
                self::assertSame('Client error', $e->getMessage());
                self::assertSame($response, $e->getResponse());
            }
        }
    }

    public function testServerErrorRangeCatchesAll5xxStatuses(): void
    {
        $payload = new Message();
        $payload->message = 'error';
        $serializer = $this->createMock(SerializerInterface::class);
        $serializer->method('deserialize')->willReturn($payload);

        foreach ([500, 503, 599] as $statusCode) {
            $response = self::response($statusCode, '{"message":"error"}', ['Content-Type' => 'application/json']);

            try {
                $this->parse($response, $serializer);
                self::fail(\sprintf('No exception thrown for status %d.', $statusCode));
            } catch (GetFooServerErrorException $e) {
                self::assertInstanceOf(ServerErrorException::class, $e);
                self::assertInstanceOf(ServerException::class, $e);
                self::assertSame('Server error', $e->getMessage());
                self::assertSame($payload, $e->getMessageObject());
                self::assertSame($response, $e->getResponse());
            }
        }
    }

    public function testUndocumentedStatusFallsBackToDefaultResponse(): void
    {
        self::assertNull($this->parse(self::response(302)));
    }
}
