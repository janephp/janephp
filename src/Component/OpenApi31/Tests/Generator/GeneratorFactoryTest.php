<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi31\Tests\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi31\Generator\ClientGenerator;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Generator\GeneratorFactory;
use Jane\Component\OpenApi31\JaneOpenApi;
use Jane\Component\OpenApiCommon\Generator\ClientGenerator as BaseClientGenerator;
use Jane\Component\OpenApiCommon\Generator\EndpointGeneratorInterface;
use Jane\Component\OpenApiCommon\Generator\OperationGenerator;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PHPUnit\Framework\TestCase;

final class GeneratorFactoryTest extends TestCase
{
    public function testBuildUsesProvidedEndpointGeneratorInstance(): void
    {
        $endpointGenerator = new class() implements EndpointGeneratorInterface {
            public function createEndpointClass(OperationGuess $operation, Context $context): array
            {
                return [];
            }
        };

        $clientGenerator = GeneratorFactory::build(JaneOpenApi::buildSerializer(), $endpointGenerator);

        self::assertInstanceOf(ClientGenerator::class, $clientGenerator);
        self::assertSame($endpointGenerator, $this->getEmbeddedEndpointGenerator($clientGenerator));
    }

    public function testBuildInstantiatesDefaultEndpointGeneratorFromClassName(): void
    {
        $clientGenerator = GeneratorFactory::build(JaneOpenApi::buildSerializer(), EndpointGenerator::class);

        self::assertInstanceOf(EndpointGenerator::class, $this->getEmbeddedEndpointGenerator($clientGenerator));
    }

    public function testBuildRejectsUnknownGeneratorClass(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown generator class');

        GeneratorFactory::build(JaneOpenApi::buildSerializer(), 'Not\\A\\Real\\Class');
    }

    public function testBuildRejectsClassNotImplementingEndpointGeneratorInterface(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('does not implement');

        GeneratorFactory::build(JaneOpenApi::buildSerializer(), \stdClass::class);
    }

    private function getEmbeddedEndpointGenerator(ClientGenerator $clientGenerator): EndpointGeneratorInterface
    {
        $operationGenerator = (new \ReflectionProperty(BaseClientGenerator::class, 'operationGenerator'))->getValue($clientGenerator);
        \assert($operationGenerator instanceof OperationGenerator);

        $endpointGenerator = (new \ReflectionProperty(OperationGenerator::class, 'endpointGenerator'))->getValue($operationGenerator);
        \assert($endpointGenerator instanceof EndpointGeneratorInterface);

        return $endpointGenerator;
    }
}
