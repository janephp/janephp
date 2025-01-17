<?php

namespace Jane\Component\OpenApiRuntime\Tests\Client\Plugin;

use Http\Promise\FulfilledPromise;
use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class AuthenticationRegistryTest extends TestCase
{
    /** @var AuthenticationRegistry */
    private $authenticationRegistry;

    protected function setUp(): void
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
            ->willReturnSelf();
        $request
            ->method('withoutHeader')
            ->willReturnSelf();

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
            ->willReturnSelf();
        $request
            ->method('withoutHeader')
            ->willReturnSelf();

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
            ->willReturnSelf();
        $request
            ->method('withoutHeader')
            ->willReturnSelf();

        $fakeCallback = function (RequestInterface $request) {
            $this->assertTrue(true);

            return new FulfilledPromise('ok');
        };
        $this->authenticationRegistry->handleRequest($request, $fakeCallback, $fakeCallback);
    }
}
