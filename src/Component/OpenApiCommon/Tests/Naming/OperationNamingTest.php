<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Naming;

use Jane\Component\OpenApi3\JsonSchema\Model\Response as OA3Response;
use Jane\Component\OpenApi3\JsonSchema\Model\Responses as OA3Responses;
use Jane\Component\OpenApi3\JsonSchema\Runtime\JsonObject;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\OperationIdNaming;
use Jane\Component\OpenApiCommon\Naming\OperationUrlNaming;
use PHPUnit\Framework\TestCase;

final class OperationNamingTest extends TestCase
{
    public static function provideReservedWordOperationIds(): iterable
    {
        yield 'list' => ['list'];
        yield 'clone' => ['clone'];
        yield 'print' => ['print'];
        yield 'empty' => ['empty'];
    }

    /**
     * @dataProvider provideReservedWordOperationIds
     */
    public function testReservedWordOperationIdsArePrefixedForEndpointName(string $operationId): void
    {
        $naming = new OperationIdNaming();
        $operation = $this->createOperationGuess($operationId, '/test', 'GET');

        self::assertSame('_' . ucfirst($operationId), $naming->getEndpointName($operation));
    }

    public function testFunctionNameKeepsReservedWordAsMethodNamesAreAllowedInPhp(): void
    {
        $naming = new OperationIdNaming();
        $operation = $this->createOperationGuess('list', '/test', 'GET');

        self::assertSame('list', $naming->getFunctionName($operation));
    }

    public function testRegularOperationIdIsNotPrefixed(): void
    {
        $naming = new OperationIdNaming();
        $operation = $this->createOperationGuess('listUsers', '/users', 'GET');

        self::assertSame('listUsers', $naming->getFunctionName($operation));
        self::assertSame('ListUsers', $naming->getEndpointName($operation));
    }

    public function testUrlNamingEndpointNameIsGuarded(): void
    {
        $naming = new OperationUrlNaming();
        $operation = $this->createOperationGuess('irrelevant', '/lists/{list_id}', 'GET');

        self::assertSame('getListByListId', $naming->getFunctionName($operation));
        self::assertSame('GetListByListId', $naming->getEndpointName($operation));
    }

    public function testUrlNamingToleratesEmptyContentMapOn200Response(): void
    {
        $response = new OA3Response();
        $response->content = new JsonObject([]);

        $naming = new OperationUrlNaming();
        $responses = new OA3Responses();
        $responses['200'] = $response;
        $operation = $this->createOperationGuess('irrelevant', '/api-url', 'GET', $responses);

        self::assertSame('getApiUrl', $naming->getFunctionName($operation));
        self::assertSame('GetApiUrl', $naming->getEndpointName($operation));
    }

    private function createOperationGuess(string $operationId, string $path, string $method, ?iterable $responses = null): OperationGuess
    {
        $pathItem = new class() {
            public function getParameters(): ?array
            {
                return null;
            }
        };
        $operation = new class($operationId, $responses) {
            public string $operationId;
            public ?iterable $responses;

            public function __construct(string $operationId, ?iterable $responses)
            {
                $this->operationId = $operationId;
                $this->responses = $responses;
            }

            public function getParameters(): ?array
            {
                return null;
            }
        };

        return new OperationGuess($pathItem, $operation, $path, $method, '#' . $path);
    }
}
