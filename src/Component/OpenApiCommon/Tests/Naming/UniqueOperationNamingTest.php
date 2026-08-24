<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Naming\UniqueOperationNaming;
use PHPUnit\Framework\TestCase;

final class UniqueOperationNamingTest extends TestCase
{
    public function testFirstOperationKeepsDecoratedNames(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming());

        $operation = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1user/get');

        self::assertSame('getUser', $naming->getFunctionName($operation));
        self::assertSame('GetUser', $naming->getEndpointName($operation));
    }

    public function testCollidingOperationIsSuffixedConsistently(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming());

        $first = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1user/get');
        $second = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1users/get');

        self::assertSame('getUser', $naming->getFunctionName($first));
        self::assertSame('GetUser', $naming->getEndpointName($first));
        self::assertSame('getUser2', $naming->getFunctionName($second));
        self::assertSame('GetUser2', $naming->getEndpointName($second));
    }

    public function testMultipleCollisionsGetIncrementingSuffixes(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming());

        $first = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1user/get');
        $second = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1users/get');
        $third = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1users~1all/get');

        self::assertSame('getUser', $naming->getFunctionName($first));
        self::assertSame('getUser2', $naming->getFunctionName($second));
        self::assertSame('getUser3', $naming->getFunctionName($third));
        self::assertSame('GetUser3', $naming->getEndpointName($third));
    }

    public function testCollisionDetectionIsCaseInsensitive(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming([
            'file:///spec.yaml#/paths/~1user/get' => ['getuser', 'Getuser'],
            'file:///spec.yaml#/paths/~1users/get' => ['GetUser', 'GetUser'],
        ]));

        $first = $this->createOperationGuess('file:///spec.yaml#/paths/~1user/get');
        $second = $this->createOperationGuess('file:///spec.yaml#/paths/~1users/get');

        self::assertSame('getuser', $naming->getFunctionName($first));
        self::assertSame('Getuser', $naming->getEndpointName($first));
        self::assertSame('GetUser2', $naming->getFunctionName($second));
        self::assertSame('GetUser2', $naming->getEndpointName($second));
    }

    public function testIdenticalNamesFromDifferentSpecificationsDoNotCollide(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming());

        $first = $this->createOperationGuess('file:///first.yaml#/paths/~1api~1user/get');
        $second = $this->createOperationGuess('file:///second.yaml#/paths/~1api~1user/get');

        self::assertSame('getUser', $naming->getFunctionName($first));
        self::assertSame('getUser', $naming->getFunctionName($second));
        self::assertSame('GetUser', $naming->getEndpointName($second));
    }

    public function testNameIsStableAcrossFunctionAndEndpointCalls(): void
    {
        $naming = new UniqueOperationNaming($this->createDecoratedNaming());

        $operation = $this->createOperationGuess('file:///spec.yaml#/paths/~1api~1users/get');

        self::assertSame('getUser', $naming->getFunctionName($operation));

        // The endpoint name is computed after the client method name during a
        // generation run: it must not be deduplicated a second time.
        self::assertSame('GetUser', $naming->getEndpointName($operation));
        self::assertSame('getUser', $naming->getFunctionName($operation));
    }

    public function testDivergentFunctionAndEndpointNamesAreTrackedIndependently(): void
    {
        // Reserved words are prefixed for endpoint class names only: both
        // registries must be checked so that no generated symbol collides.
        $naming = new UniqueOperationNaming($this->createDecoratedNaming([
            'file:///spec.yaml#/paths/~1lists/get' => ['list', '_List'],
            'file:///spec.yaml#/paths/~1list/get' => ['list', '_List'],
        ]));

        $first = $this->createOperationGuess('file:///spec.yaml#/paths/~1lists/get');
        $second = $this->createOperationGuess('file:///spec.yaml#/paths/~1list/get');

        self::assertSame('list', $naming->getFunctionName($first));
        self::assertSame('_List', $naming->getEndpointName($first));
        self::assertSame('list2', $naming->getFunctionName($second));
        self::assertSame('_List2', $naming->getEndpointName($second));
    }

    /**
     * @param array<string, array{string, string}> $namesByReference
     */
    private function createDecoratedNaming(array $namesByReference = []): OperationNamingInterface
    {
        return new class($namesByReference) implements OperationNamingInterface {
            /**
             * @param array<string, array{string, string}> $namesByReference
             */
            public function __construct(
                private readonly array $namesByReference,
            ) {
            }

            public function getFunctionName(OperationGuess $operation): string
            {
                return $this->namesByReference[$operation->getReference()][0] ?? 'getUser';
            }

            public function getEndpointName(OperationGuess $operation): string
            {
                return $this->namesByReference[$operation->getReference()][1] ?? 'GetUser';
            }
        };
    }

    private function createOperationGuess(string $reference): OperationGuess
    {
        $pathItem = new class() {
            public function getParameters(): ?array
            {
                return null;
            }
        };
        $operation = new class() {
            public function getParameters(): ?array
            {
                return null;
            }
        };

        return new OperationGuess($pathItem, $operation, '/test', 'GET', $reference);
    }
}
