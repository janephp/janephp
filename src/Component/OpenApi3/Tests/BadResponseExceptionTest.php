<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\Tests\BadResponse\Endpoint\GetFoo;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\BadResponseException;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\UnexpectedStatusCodeException;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\WithResponseInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @see https://github.com/janephp/janephp/issues/815
 */
class BadResponseExceptionTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/bad-response-exception/expected';

    private static function response(int $statusCode, string $body = '', array $headers = []): ResponseInterface
    {
        return (new MockHttpClient(new MockResponse($body, ['http_code' => $statusCode, 'response_headers' => $headers])))
            ->request('GET', 'https://example.com/foo');
    }

    protected function setUp(): void
    {
        foreach ([
            'Runtime/Client/Client',
            'Runtime/Client/Endpoint',
            'Runtime/Client/EndpointTrait',
            'Runtime/Client/BaseEndpoint',
            'Exception/ApiException',
            'Exception/ClientException',
            'Exception/ServerException',
            'Exception/WithResponseInterface',
            'Exception/UnexpectedStatusCodeException',
            'Exception/BadResponseException',
            'Endpoint/GetFoo',
        ] as $file) {
            require_once self::FIXTURE_DIR . '/' . $file . '.php';
        }
    }

    public function testUndocumentedResponseThrowsBadResponseException(): void
    {
        $response = self::response(409, '{"message":"conflict"}');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class));
            self::fail('No exception thrown for undocumented response.');
        } catch (BadResponseException $e) {
            self::assertSame(409, $e->getCode());
            self::assertSame('{"message":"conflict"}', $e->getMessage());
            self::assertSame($response, $e->getResponse());
        }
    }

    public function testBadResponseExceptionIsACatchableUnexpectedStatusCodeException(): void
    {
        $response = self::response(503, 'unavailable');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class));
            self::fail('No exception thrown for undocumented response.');
        } catch (UnexpectedStatusCodeException $e) {
            self::assertInstanceOf(BadResponseException::class, $e);
            self::assertSame(503, $e->getCode());
            self::assertSame('unavailable', $e->getMessage());
        }
    }

    /**
     * @see https://github.com/janephp/janephp/issues/844
     */
    public function testUnexpectedStatusCodeExceptionExposesResponse(): void
    {
        $response = self::response(418, 'teapot');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class));
            self::fail('No exception thrown for undocumented response.');
        } catch (UnexpectedStatusCodeException $e) {
            self::assertInstanceOf(WithResponseInterface::class, $e);
            self::assertSame($response, $e->getResponse());
        }
    }

    public function testDocumentedResponseStillReturnsNull(): void
    {
        $response = self::response(200);
        $endpoint = new GetFoo();

        self::assertNull($endpoint->parseResponse($response, $this->createMock(SerializerInterface::class)));
    }
}
