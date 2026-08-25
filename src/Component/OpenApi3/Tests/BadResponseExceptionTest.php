<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\Tests\BadResponse\Endpoint\GetFoo;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\BadResponseException;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\UnexpectedStatusCodeException;
use Jane\Component\OpenApi3\Tests\BadResponse\Exception\WithResponseInterface;
use Jane\Component\OpenApi3\Tests\BadResponse\Runtime\Client\Client;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @see https://github.com/janephp/janephp/issues/815
 */
class BadResponseExceptionTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/bad-response-exception/expected';

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
        $response = new Response(409, [], '{"message":"conflict"}');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class), Client::FETCH_OBJECT);
            self::fail('No exception thrown for undocumented response.');
        } catch (BadResponseException $e) {
            self::assertSame(409, $e->getCode());
            self::assertSame('{"message":"conflict"}', $e->getMessage());
            self::assertSame($response, $e->getResponse());
        }
    }

    public function testBadResponseExceptionIsACatchableUnexpectedStatusCodeException(): void
    {
        $response = new Response(503, [], 'unavailable');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class), Client::FETCH_OBJECT);
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
        $response = new Response(418, [], 'teapot');
        $endpoint = new GetFoo();

        try {
            $endpoint->parseResponse($response, $this->createMock(SerializerInterface::class), Client::FETCH_OBJECT);
            self::fail('No exception thrown for undocumented response.');
        } catch (UnexpectedStatusCodeException $e) {
            self::assertInstanceOf(WithResponseInterface::class, $e);
            self::assertSame($response, $e->getResponse());
        }
    }

    public function testDocumentedResponseStillReturnsNull(): void
    {
        $response = new Response(200, []);
        $endpoint = new GetFoo();

        self::assertNull($endpoint->parseResponse($response, $this->createMock(SerializerInterface::class), Client::FETCH_OBJECT));
    }
}
