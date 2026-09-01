<?php

namespace Jane\Component\OpenApi2;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\Operation;
use Jane\Component\OpenApi2\JsonSchema\Model\Response;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema as SchemaModel;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Registry\Registry;
use Jane\Component\OpenApiCommon\Registry\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class WhitelistedSchema implements WhitelistFetchInterface
{
    private $schema;
    private $naming;
    private $guessClass;

    public function __construct(Schema $schema, DenormalizerInterface $denormalizer, ?OperationNamingInterface $naming = null)
    {
        $this->schema = $schema;
        $this->naming = $naming ?? OperationNamingFactory::create();
        $this->guessClass = new GuessClass(SchemaModel::class, $denormalizer);
    }

    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry): void
    {
        $baseOperation = $this->naming->getEndpointName($operationGuess);
        if ($this->schema->relationExists($baseOperation)) {
            return;
        }

        /** @var Operation $operation */
        $operation = $operationGuess->getOperation();
        if (null !== ($operation->responses ?? null) && \count($operation->responses ?? null) > 0) {
            foreach (($operation->responses ?? null) as $status => $response) {
                $reference = $operationGuess->getReference() . '/responses/' . $status;
                if ($response instanceof Reference) {
                    [$reference, $response] = $this->guessClass->resolve($response, Response::class);
                }

                /** @var Response $response */
                if (null === ($response->schema ?? null)) {
                    continue;
                }

                $schema = ($response->schema ?? null);
                $classGuess = $this->guessClass->guessClass($schema, $reference, $registry);
                if (null !== $classGuess) {
                    $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                }
            }
        }

        if (($operation->parameters ?? null) !== null && \count($operation->parameters ?? null) > 0) {
            foreach (($operation->parameters ?? null) as $key => $parameter) {
                if ($parameter instanceof BodyParameter && null !== ($parameter->schema ?? null)) {
                    $reference = $operationGuess->getReference() . '/parameters/' . $key;
                    $schema = ($parameter->schema ?? null);
                    $classGuess = $this->guessClass->guessClass($schema, $reference, $registry);
                    if (null !== $classGuess) {
                        $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                    }
                }
            }
        }
    }
}
