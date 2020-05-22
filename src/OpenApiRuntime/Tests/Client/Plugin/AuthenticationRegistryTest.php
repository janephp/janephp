<?php

namespace Jane\OpenApiRuntime\Tests\Client\Plugin;

use Http\Promise\FulfilledPromise;
use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class AuthenticationRegistryTest extends TestCase
{
    /** @var AuthenticationRegistry */
    private $authenticationRegistry;

    public function setUp(): void
    {
        $plugins = [];
        $plugins[] = new class() implements AuthenticationPlugin {
            public function authentication(RequestInterface $request): RequestInterface
            {
                $request->withHeader('A', 'A');

                return $request;
            }

            public function getScope(): string
            {
                return 'A';
            }
        };

        $plugins[] = new class() implements AuthenticationPlugin {
            public function authentication(RequestInterface $request): RequestInterface
            {
                $request->withHeader('B', 'B');

                return $request;
            }

            public function getScope(): string
            {
                return 'B';
            }
        };

        $plugins[] = new class() implements AuthenticationPlugin {
            public function authentication(RequestInterface $request): RequestInterface
            {
                $request->withHeader('C', 'C');

                return $request;
            }

            public function getScope(): string
            {
                return 'C';
            }
        };

        $this->authenticationRegistry = new AuthenticationRegistry($plugins);
    }

    public function testNoPlugins(): void
    {
        // force no plugins
        $this->authenticationRegistry = new AuthenticationRegistry([]);

        $request = $this->createMock(RequestInterface::class);
        $request
            ->method('withHeader')
            ->willReturnCallback(function (string $name, string $value) {});
        $request
            ->method('withoutHeader')
            ->willReturn($request);

        $fakeCallback = function (RequestInterface $request) {
            $this->assertTrue(true);

            return new FulfilledPromise('ok');
        };
        $this->authenticationRegistry->handleRequest($request, $fakeCallback, $fakeCallback);
    }

    public function testOneScope(): void
    {
        $request = $this->createMock(RequestInterface::class);
        $request
            ->method('getHeader')
            ->with(AuthenticationRegistry::SCOPES_HEADER)
            ->willReturn(['A']);
        $request
            ->method('withHeader')
            ->willReturnCallback(function (string $name, string $value) {
                $this->assertEquals('A', $name);
                $this->assertEquals('A', $value);
            });
        $request
            ->method('withoutHeader')
            ->willReturn($request);

        $fakeCallback = function (RequestInterface $request) {
            $this->assertTrue(true);

            return new FulfilledPromise('ok');
        };
        $this->authenticationRegistry->handleRequest($request, $fakeCallback, $fakeCallback);
    }

    public function testMultipleScope(): void
    {
        $request = $this->createMock(RequestInterface::class);
        $request
            ->method('getHeader')
            ->with(AuthenticationRegistry::SCOPES_HEADER)
            ->willReturn(['A', 'C']);
        $request
            ->method('withHeader')
            ->willReturnOnConsecutiveCalls([
                new ReturnCallback(function (string $name, string $value) {
                    $this->assertEquals('A', $name);
                    $this->assertEquals('A', $value);
                }),
                new ReturnCallback(function (string $name, string $value) {
                    $this->assertEquals('C', $name);
                    $this->assertEquals('C', $value);
                }),
            ]);
        $request
            ->method('withoutHeader')
            ->willReturn($request);

        $fakeCallback = function (RequestInterface $request) {
            $this->assertTrue(true);

            return new FulfilledPromise('ok');
        };
        $this->authenticationRegistry->handleRequest($request, $fakeCallback, $fakeCallback);
    }
}
