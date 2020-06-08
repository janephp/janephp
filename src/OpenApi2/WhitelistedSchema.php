<?php

namespace Jane\OpenApi2;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\OpenApi2\JsonSchema\Model\Operation;
use Jane\OpenApi2\JsonSchema\Model\Response;
use Jane\OpenApi2\JsonSchema\Model\Schema as SchemaModel;
use Jane\OpenApi2\Naming\OperationUrlNaming;
use Jane\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Guesser\GuessClass;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use Jane\OpenApiCommon\Registry\Registry;
use Jane\OpenApiCommon\Registry\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class WhitelistedSchema implements WhitelistFetchInterface
{
    private $schema;
    private $naming;
    private $guessClass;

    public function __construct(Schema $schema, DenormalizerInterface $denormalizer)
    {
        $this->schema = $schema;
        $this->naming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
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
        if (null !== $operation->getResponses() && \count($operation->getResponses()) > 0) {
            foreach ($operation->getResponses() as $status => $response) {
                $reference = $operationGuess->getReference() . '/responses/' . $status;
                if ($response instanceof Reference) {
                    [$reference, $response] = $this->guessClass->resolve($response, Response::class);
                }

                /** @var Response $response */
                if (null === $response->getSchema()) {
                    continue;
                }

                $schema = $response->getSchema();
                $classGuess = $this->guessClass->guessClass($schema, $reference, $registry);
                if (null !== $classGuess) {
                    $this->schema->addRelation($baseOperation, $classGuess->getName());
                }
            }
        }

        if (null !== $operation->getParameters() && \count($operation->getParameters()) > 0) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof BodyParameter && null !== $parameter->getSchema()) {
                    $reference = $operationGuess->getReference() . '/parameters/' . $key;
                    $schema = $parameter->getSchema();
                    $classGuess = $this->guessClass->guessClass($schema, $reference, $registry);
                    if (null !== $classGuess) {
                        $this->schema->addRelation($baseOperation, $classGuess->getName());
                    }
                }
            }
        }
    }
}
