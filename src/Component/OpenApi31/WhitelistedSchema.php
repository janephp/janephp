<?php

namespace Jane\Component\OpenApi31;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi31\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\Component\OpenApiCommon\Naming\OperationIdNaming;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Naming\OperationUrlNaming;
use Jane\Component\OpenApiCommon\Registry\Registry;
use Jane\Component\OpenApiCommon\Registry\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class WhitelistedSchema implements WhitelistFetchInterface
{
    private OperationNamingInterface $naming;
    private GuessClass $guessClass;

    public function __construct(
        private readonly Schema $schema,
        DenormalizerInterface $denormalizer,
    ) {
        $this->naming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
        $this->guessClass = new GuessClass(JsonSchema::class, $denormalizer);
    }

    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry): void
    {
        $baseOperation = $this->naming->getEndpointName($operationGuess);
        if ($this->schema->relationExists($baseOperation)) {
            return;
        }

        /** @var RequestBody|null $requestBody */
        $requestBody = $operationGuess->getOperation()->getRequestBody();
        if (null !== $requestBody) {
            if (null !== $requestBody->getContent() && is_iterable($requestBody->getContent())) {
                /** @var MediaType $content */
                foreach ($requestBody->getContent() as $contentType => $content) {
                    if (\in_array($contentType, ['application/json', 'application/x-www-form-urlencoded'], true) || str_ends_with($contentType, '+json')) {
                        $contentReference = $operationGuess->getReference() . '/content/' . $contentType . '/schema';
                        $schema = $content->getSchema();
                        $classGuess = $this->guessClass->guessClass($schema, $contentReference, $registry);
                        if (null !== $classGuess) {
                            $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                        }
                    }
                }
            }
        }

        /** @var Response[]|null $responses */
        $responses = $operationGuess->getOperation()->getResponses();
        if (null !== $responses && \count($responses) > 0) {
            foreach ($responses as $response) {
                if ($response instanceof Reference) {
                    [$_, $response] = $this->guessClass->resolve($response, Response::class);
                }
                if (!($response instanceof Response)) {
                    continue;
                }

                if (null === $response->getContent()) {
                    $schema = null;
                    $classGuess = $this->guessClass->guessClass($schema, $operationGuess->getReference(), $registry);
                    if (null !== $classGuess) {
                        $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                    }
                }

                if (null !== $response->getContent() && is_iterable($response->getContent())) {
                    /** @var MediaType $content */
                    foreach ($response->getContent() as $contentType => $content) {
                        if ('application/json' === $contentType || str_ends_with($contentType, '+json')) {
                            $contentReference = $operationGuess->getReference() . '/content/' . $contentType . '/schema';
                            $schema = $content->getSchema();
                            $classGuess = $this->guessClass->guessClass($schema, $contentReference, $registry);
                            if (null !== $classGuess) {
                                $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                            }
                        }
                    }
                }
            }
        }
    }
}
