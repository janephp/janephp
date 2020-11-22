<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Tests\Client;

use Jane\Component\OpenApiRuntime\Client\Client;
use Jane\Component\OpenApiRuntime\Client\Endpoint;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ClientTest extends TestCase
{
    /**
     * @covers \Jane\Component\OpenApiRuntime\Client\Client::__construct
     * @covers \Jane\Component\OpenApiRuntime\Client\Client::executeEndpoint
     */
    public function testExecutePsr7Endpoint(): void
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $httpClientMock = $this->createMock(ClientInterface::class);
        $httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn($responseMock);

        $requestMock = $this->createMock(RequestInterface::class);

        $requestFactoryMock = $this->createMock(RequestFactoryInterface::class);
        $requestFactoryMock
            ->expects($this->once())
            ->method('createRequest')
            ->with('GET', '/foo')
            ->willReturn($requestMock);

        $serializerMock = $this->createMock(SerializerInterface::class);

        $streamFactoryMock = $this->createMock(StreamFactoryInterface::class);

        $client = new class($httpClientMock, $requestFactoryMock, $serializerMock, $streamFactoryMock) extends Client {
        };

        $streamMock = $this->createMock(StreamInterface::class);

        $requestMock
            ->expects($this->once())
            ->method('withBody')
            ->with($streamMock)
            ->willReturn($requestMock);

        $streamFactoryMock
            ->expects($this->once())
            ->method('createStream')
            ->with('foo')
            ->willReturn($streamMock);

        $endpointMock = $this->getMockBuilder(Endpoint::class)->getMock();
        $endpointMock
            ->expects($this->once())
            ->method('getBody')
            ->willReturn([[], 'foo']);
        $endpointMock
            ->expects($this->once())
            ->method('getQueryString')
            ->willReturn('');
        $endpointMock
            ->expects($this->exactly(2))
            ->method('getUri')
            ->willReturn('/foo');
        $endpointMock
            ->expects($this->once())
            ->method('getMethod')
            ->willReturn('GET');
        $endpointMock
            ->expects($this->once())
            ->method('getHeaders')
            ->with([])
            ->willReturn([]);
        $endpointMock
            ->expects($this->once())
            ->method('parseResponse')
            ->willReturn('foo');

        $this->assertSame('foo', $client->executeEndpoint($endpointMock));
    }
}
