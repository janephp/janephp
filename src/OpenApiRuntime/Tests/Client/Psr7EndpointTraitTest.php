<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Tests\Client;

use Jane\OpenApiRuntime\Client\Client;
use Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException;
use Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class Psr7EndpointTraitTest extends TestCase
{
    /**
     * @covers \Jane\OpenApiRuntime\Client\Psr7EndpointTrait::parsePSR7Response
     */
    public function testParsePSR7ResponseWithObjectFetchModeShouldTransformResponseBody()
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

        $this->assertSame('foo', $endpoint->parsePSR7Response($responseMock, $serializerMock));
    }

    /**
     * @covers \Jane\OpenApiRuntime\Client\Psr7EndpointTrait::parsePSR7Response
     */
    public function testParsePSR7ResponseWithResponseFetchModeShouldReturnResponse()
    {
        $endpoint = $this->getEndpointInstance();

        $responseMock = $this->createMock(ResponseInterface::class);
        $serializerMock = $this->createMock(SerializerInterface::class);

        $this->assertSame($responseMock, $endpoint->parsePSR7Response($responseMock, $serializerMock, Client::FETCH_RESPONSE));
    }

    /**
     * @covers \Jane\OpenApiRuntime\Client\Psr7EndpointTrait::parsePSR7Response
     */
    public function testParsePSR7ResponseWithInvalidFetchModeShouldThrowException()
    {
        $endpoint = $this->getEndpointInstance();

        $responseMock = $this->createMock(ResponseInterface::class);
        $serializerMock = $this->createMock(SerializerInterface::class);

        $this->expectException(InvalidFetchModeException::class);
        $this->expectExceptionMessage('Fetch mode foo is not supported');
        $endpoint->parsePSR7Response($responseMock, $serializerMock, 'foo');
    }

    private function getEndpointInstance()
    {
        static $endpoint = null;
        if ($endpoint === null) {
            $endpoint = new class() {
                use Psr7EndpointTrait;

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
