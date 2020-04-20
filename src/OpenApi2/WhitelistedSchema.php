<?php

namespace Jane\OpenApi2;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\JsonSchema\Model\Operation;
use Jane\OpenApi2\JsonSchema\Model\Response;
use Jane\OpenApi2\Guesser\GuessClass;
use Jane\OpenApi2\Naming\OperationUrlNaming;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use Jane\OpenApiCommon\Registry;
use Jane\OpenApiCommon\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class WhitelistedSchema
{
    use GuessClass;

    private $schema;
    private $denormalizer;
    private $naming;

    public function __construct(Schema $schema, DenormalizerInterface $denormalizer)
    {
        $this->schema = $schema;
        $this->denormalizer = $denormalizer;
        $this->naming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
    }

    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry): void
    {
        $baseOperation = $this->naming->getEndpointName($operationGuess);

        /** @var Operation $operation */
        $operation = $operationGuess->getOperation();
        if (\count($operation->getResponses()) > 0) {
            foreach ($operation->getResponses() as $status => $response) {
                $reference = $operationGuess->getReference() . '/responses/' . $status;
                if ($response instanceof Reference) {
                    [$reference, $response] = $this->resolve($response, Response::class, $this->denormalizer);
                }

                /** @var Response $response */
                $classGuess = $this->guessClass($response->getSchema(), $reference, $registry, $this->denormalizer);
                if (null !== $classGuess) {
                    $this->schema->addRelation($baseOperation, $classGuess->getName());
                }
            }
        }
    }
}