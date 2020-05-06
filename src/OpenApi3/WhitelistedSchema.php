<?php

namespace Jane\OpenApi3;

use Jane\OpenApi3\JsonSchema\Model\MediaType;
use Jane\OpenApi3\JsonSchema\Model\Parameter;
use Jane\OpenApi3\JsonSchema\Model\Response;
use Jane\OpenApi3\Naming\OperationUrlNaming;
use Jane\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Guesser\GuessClass;
use Jane\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\OpenApiCommon\Naming\OperationIdNaming;
use Jane\OpenApiCommon\Registry\Registry;
use Jane\OpenApiCommon\Registry\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Jane\OpenApi3\JsonSchema\Model\Schema as SchemaModel;

class WhitelistedSchema implements WhitelistFetchInterface
{
    private $schema;
    private $denormalizer;
    private $naming;
    private $guessClass;

    public function __construct(Schema $schema, DenormalizerInterface $denormalizer)
    {
        $this->schema = $schema;
        $this->denormalizer = $denormalizer;
        $this->naming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
        $this->guessClass = new GuessClass(SchemaModel::class);
    }

    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry): void
    {
        $baseOperation = $this->naming->getEndpointName($operationGuess);

        /** @var Response[]|null $responses */
        $responses = $operationGuess->getOperation()->getResponses();
        if (null !== $responses && \count($responses) > 0) {
            foreach ($responses as $response) {
                if (null === $response->getContent()) {
                    $classGuess = $this->guessClass->guessClass(null, $operationGuess->getReference(), $registry, $this->denormalizer);
                    if (null !== $classGuess) {
                        $this->schema->addRelation($baseOperation, $classGuess->getName());
                    }
                }

                if (null !== $response->getContent() && is_iterable($response->getContent())) {
                    /** @var MediaType $content */
                    foreach ($response->getContent() as $contentType => $content) {
                        if ('application/json' === $contentType) {
                            $contentReference = $operationGuess->getReference() . '/content/' . $contentType . '/schema';
                            $classGuess = $this->guessClass->guessClass($content->getSchema(), $contentReference, $registry, $this->denormalizer);
                            if (null !== $classGuess) {
                                $this->schema->addRelation($baseOperation, $classGuess->getName());
                            }
                        }
                    }
                }
            }
        }

        /** @var Parameter[]|null $parameters */
        $parameters = $operationGuess->getOperation()->getParameters();
        if (null !== $parameters && \count($parameters) > 0) {
            foreach ($parameters as $key => $parameter) {
                if ($parameter instanceof Parameter && 'body' === $parameter->getIn()) {
                    $reference = $operationGuess->getReference() . '/parameters/' . $key;
                    $classGuess = $this->guessClass->guessClass($parameter->getSchema(), $reference, $registry, $this->denormalizer);
                    if (null !== $classGuess) {
                        $this->schema->addRelation($baseOperation, $classGuess->getName());
                    }
                }
            }
        }
    }
}
