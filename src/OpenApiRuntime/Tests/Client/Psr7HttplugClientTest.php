<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Tests\Client;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Jane\OpenApiRuntime\Client\Psr7HttplugClient;
use Jane\OpenApiRuntime\Client\Psr7Endpoint;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class Psr7HttplugClientTest extends TestCase
{
    /**
     * @covers \Jane\OpenApiRuntime\Client\Psr7HttplugClient::__construct
     * @covers \Jane\OpenApiRuntime\Client\Psr7HttplugClient::executePsr7Endpoint
     */
    public function testExecutePsr7Endpoint()
    {
        $responseMock = $this->createMock(ResponseInterface::class);
        $httpClientMock = $this->createMock(HttpClient::class);
        $httpClientMock
            ->expects($this->once())
            ->method('sendRequest')
            ->willReturn($responseMock);

        $requestMock = $this->createMock(RequestInterface::class);
        $messageFactoryMock = $this->createMock(MessageFactory::class);
        $messageFactoryMock
            ->expects($this->once())
            ->method('createRequest')
            ->with('GET', '/foo', [], 'bar')
            ->willReturn($requestMock);

        $serializerMock = $this->createMock(SerializerInterface::class);

        $streamFactoryMock = $this->createMock(StreamFactory::class);

        $client = new class($httpClientMock, $messageFactoryMock, $serializerMock, $streamFactoryMock) extends Psr7HttplugClient {
        };

        $endpointMock = $this->getMockBuilder(Psr7Endpoint::class)->getMock();
        $endpointMock
            ->expects($this->once())
            ->method('getBody')
            ->willReturn([[], 'bar']);
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
            ->method('parsePSR7Response')
            ->willReturn('foo');

        $this->assertSame('foo', $client->executePsr7Endpoint($endpointMock));
    }
}
