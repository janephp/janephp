<?php

namespace Jane\Component\OpenApi31;

use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi31\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApi31\JsonSchema\Model\Responses;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Generator\ContentType;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
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
        ?OperationNamingInterface $naming = null,
    ) {
        $this->naming = $naming ?? OperationNamingFactory::create();
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
                    $baseContentType = ContentType::withoutParameters($contentType);

                    if (\in_array($baseContentType, ['application/json', 'application/x-www-form-urlencoded'], true) || str_ends_with($baseContentType, '+json')) {
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

        /** @var Responses|null $responses */
        $responses = $operationGuess->getOperation()->getResponses();
        if (null !== $responses && \count($responses) > 0) {
            foreach ($responses as $response) {
                $this->addResponseRelations($operationGuess, $baseOperation, $response, $registry);
            }

            $defaultResponse = $responses->getDefault();
            if (null !== $defaultResponse) {
                $this->addResponseRelations($operationGuess, $baseOperation, $defaultResponse, $registry);
            }
        }
    }

    private function addResponseRelations(OperationGuess $operationGuess, string $baseOperation, mixed $response, Registry $registry): void
    {
        if ($response instanceof Reference) {
            [$_, $response] = $this->guessClass->resolve($response, Response::class);
        }
        if (!($response instanceof Response)) {
            return;
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
                $baseContentType = ContentType::withoutParameters($contentType);

                if (\in_array($baseContentType, ['application/json', 'application/x-www-form-urlencoded'], true) || str_ends_with($baseContentType, '+json')) {
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
