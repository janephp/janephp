<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Tests\Client;

use Jane\OpenApiRuntime\Client\Client;
use Jane\OpenApiRuntime\Client\EndpointTrait;
use Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class EndpointTraitTest extends TestCase
{
    /**
     * @covers \Jane\OpenApiRuntime\Client\EndpointTrait::parseResponse
     */
    public function testParsePSR7ResponseWithObjectFetchModeShouldTransformResponseBody(): void
    {
        $endpoint = $this->getEndpointInstance();

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock
            ->expects($this->once())
            ->method('hasHeader')
            ->with('Content-Type')
            ->willReturn(true);

        $responseMock
            ->expects($this->once())
            ->method('getHeader')
            ->willReturn(['application/json']);

        $responseMock
            ->expects($this->once())
            ->method('getStatusCode')
            ->willReturn(200);

        $serializerMock = $this->createMock(SerializerInterface::class);

        $this->assertSame('foo', $endpoint->parseResponse($responseMock, $serializerMock));
    }

    /**
     * @covers \Jane\OpenApiRuntime\Client\EndpointTrait::parseResponse
     */
    public function testParsePSR7ResponseWithResponseFetchModeShouldReturnResponse(): void
    {
        $endpoint = $this->getEndpointInstance();

        $responseMock = $this->createMock(ResponseInterface::class);
        $serializerMock = $this->createMock(SerializerInterface::class);

        $this->assertSame($responseMock, $endpoint->parseResponse($responseMock, $serializerMock, Client::FETCH_RESPONSE));
    }

    /**
     * @covers \Jane\OpenApiRuntime\Client\EndpointTrait::parseResponse
     */
    public function testParsePSR7ResponseWithInvalidFetchModeShouldThrowException(): void
    {
        $endpoint = $this->getEndpointInstance();

        $responseMock = $this->createMock(ResponseInterface::class);
        $serializerMock = $this->createMock(SerializerInterface::class);

        $this->expectException(InvalidFetchModeException::class);
        $this->expectExceptionMessage('Fetch mode foo is not supported');
        $endpoint->parseResponse($responseMock, $serializerMock, 'foo');
    }

    private function getEndpointInstance(): object
    {
        static $endpoint = null;
        if ($endpoint === null) {
            $endpoint = new class() {
                use EndpointTrait;

                protected function transformResponseBody(
                    string $body,
                    int $status,
                    SerializerInterface $serializer,
                    string $contentType = null
                ) {
                    return 'foo';
                }
            };
        }

        return $endpoint;
    }
}
