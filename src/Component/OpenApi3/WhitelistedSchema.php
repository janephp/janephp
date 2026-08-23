<?php

namespace Jane\Component\OpenApi3;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi3\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApi3\JsonSchema\Model\Response;
use Jane\Component\OpenApi3\JsonSchema\Model\Responses;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema as SchemaModel;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Generator\ContentType;
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
        $this->guessClass = new GuessClass(SchemaModel::class, $denormalizer);
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

        /** @var Parameter[]|null $parameters */
        $parameters = $operationGuess->getOperation()->getParameters();
        if (null !== $parameters && \count($parameters) > 0) {
            foreach ($parameters as $key => $parameter) {
                if ($parameter instanceof Parameter && 'body' === $parameter->getIn()) {
                    $reference = $operationGuess->getReference() . '/parameters/' . $key;
                    $schema = $parameter->getSchema();
                    $classGuess = $this->guessClass->guessClass($schema, $reference, $registry);
                    if (null !== $classGuess) {
                        $this->schema->addOperationRelation($baseOperation, $classGuess->getName());
                    }
                }
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

                if ('application/json' === $baseContentType || str_ends_with($baseContentType, '+json')) {
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
