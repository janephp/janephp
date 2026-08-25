<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use PHPUnit\Framework\TestCase;

final class OperationNamingFactoryTest extends TestCase
{
    public function testCreateWithoutNamingUsesDefaultChain(): void
    {
        $naming = OperationNamingFactory::create();

        self::assertInstanceOf(ChainOperationNaming::class, $naming);

        // operationId based name wins when an operationId is available
        $operation = $this->createOperationGuess('/api/user', 'GET', 'list-user');
        self::assertSame('listUser', $naming->getFunctionName($operation));
        self::assertSame('ListUser', $naming->getEndpointName($operation));

        // URL based fallback when the operation has no operationId
        $operation = $this->createOperationGuess('/api/user', 'GET', null);
        self::assertSame('getApiUser', $naming->getFunctionName($operation));
        self::assertSame('GetApiUser', $naming->getEndpointName($operation));
    }

    public function testCreateWithEmptyArrayUsesDefaultChain(): void
    {
        $operation = $this->createOperationGuess('/api/user', 'GET', null);

        $naming = OperationNamingFactory::create([]);
        self::assertSame('getApiUser', $naming->getFunctionName($operation));
    }

    public function testCreateWrapsSingleInstanceInChain(): void
    {
        $customNaming = new class() implements OperationNamingInterface {
            public function getFunctionName(OperationGuess $operation): string
            {
                return 'customFunction';
            }

            public function getEndpointName(OperationGuess $operation): string
            {
                return 'CustomEndpoint';
            }
        };

        $naming = OperationNamingFactory::create($customNaming);

        self::assertInstanceOf(ChainOperationNaming::class, $naming);

        $operation = $this->createOperationGuess('/api/user', 'GET', null);
        self::assertSame('customFunction', $naming->getFunctionName($operation));
        self::assertSame('CustomEndpoint', $naming->getEndpointName($operation));
    }

    public function testCreatePreservesListOfNamingsInOrder(): void
    {
        $deferredFunctionNaming = new class() implements OperationNamingInterface {
            public function getFunctionName(OperationGuess $operation): string
            {
                return '';
            }

            public function getEndpointName(OperationGuess $operation): string
            {
                return 'FirstEndpoint';
            }
        };
        $lastNaming = new class() implements OperationNamingInterface {
            public function getFunctionName(OperationGuess $operation): string
            {
                return 'lastFunction';
            }

            public function getEndpointName(OperationGuess $operation): string
            {
                return 'LastEndpoint';
            }
        };

        $naming = OperationNamingFactory::create([$deferredFunctionNaming, $lastNaming]);
        $operation = $this->createOperationGuess('/api/user', 'GET', null);

        // first naming defers the function name, so the second one is used
        self::assertSame('lastFunction', $naming->getFunctionName($operation));
        // endpoint name is taken from the first naming, proving the order is preserved
        self::assertSame('FirstEndpoint', $naming->getEndpointName($operation));
    }

    public function testCreateRejectsEntryNotImplementingInterface(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(\sprintf('Operation naming must implement %s, "stdClass" given', OperationNamingInterface::class));

        OperationNamingFactory::create([new \stdClass()]);
    }

    public function testCreateRejectsScalarEntry(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(\sprintf('Operation naming must implement %s, "string" given', OperationNamingInterface::class));

        OperationNamingFactory::create(['CustomNaming']);
    }

    private function createOperationGuess(string $path, string $method, ?string $operationId): OperationGuess
    {
        $pathItem = new class() {
            public function getParameters(): ?array
            {
                return null;
            }
        };
        $operation = new class($operationId) {
            public function __construct(
                private readonly ?string $operationId,
            ) {
            }

            public function getOperationId(): ?string
            {
                return $this->operationId;
            }

            public function getParameters(): ?array
            {
                return null;
            }

            public function getResponses(): ?\ArrayObject
            {
                return null;
            }
        };

        return new OperationGuess($pathItem, $operation, $path, $method, "file:///spec.yaml#/paths/~1{$path}/{$method}");
    }
}
