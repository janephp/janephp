<?php

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Model\Components;
use Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApi3\JsonSchema\Model\Operation;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi3\JsonSchema\Model\PathItem;
use Jane\Component\OpenApi3\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApi3\JsonSchema\Model\Response;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\ChainOperationNaming;
use Jane\Component\OpenApiCommon\Naming\OperationIdNaming;
use Jane\Component\OpenApiCommon\Naming\OperationUrlNaming;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    private const IN_BODY = 'body';
    private $slugger;
    private $naming;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        $this->slugger = new AsciiSlugger();
        $this->naming = new ChainOperationNaming([
            new OperationIdNaming(),
            new OperationUrlNaming(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return $object instanceof OpenApi;
    }

    /**
     * {@inheritdoc}
     *
     * @param OpenApi         $object
     * @param OpenApiRegistry $registry
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getSchemas())) {
            foreach ($object->getComponents()->getSchemas() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/components/schemas/' . $key, $registry);
            }
        }
        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getSecuritySchemes())) {
            foreach ($object->getComponents()->getSecuritySchemes() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/components/securitySchemes/' . $key, $registry);
            }
        }

        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getResponses())) {
            foreach ($object->getComponents()->getResponses() as $responseName => $response) {
                if (is_iterable($response->getContent())) {
                    foreach ($response->getContent() as $contentType => $content) {
                        if ($contentType === 'application/problem+json' && $content->getSchema() === null) {
                            $content->setSchema($this->getApplicationProblemJsonDefaultSchema());
                        }

                        $this->chainGuesser->guessClass($content->getSchema(), 'Response' . ucfirst($responseName), $reference . '/components/responses/' . $responseName . '/content/' . $contentType . '/schema', $registry);
                    }
                }
            }
        }

        if (is_iterable($object->getPaths())) {
            $whitelistedPaths = $registry->getWhitelistedPaths() ?? [];
            $checkWhitelistedPaths = \count($whitelistedPaths) > 0;

            $globalSecurityScopes = [];
            foreach ($object->getSecurity() ?? [] as $securityItem) {
                foreach ($securityItem as $scope => $_) {
                    $globalSecurityScopes[] = $scope;
                }
            }

            foreach ($object->getPaths() as $pathName => $path) {
                if ($checkWhitelistedPaths && null === ($allowedMethods = $this->isWhitelisted($pathName, $whitelistedPaths))) {
                    continue;
                }

                if ($path instanceof PathItem) {
                    if ($checkWhitelistedPaths) {
                        if (\in_array(OperationGuess::DELETE, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getDelete(), $pathName, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::GET, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getGet(), $pathName, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::HEAD, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getHead(), $pathName, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::OPTIONS, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getOptions(), $pathName, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::PATCH, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getPatch(), $pathName, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::POST, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getPost(), $pathName, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
                        }
                        if (\in_array(OperationGuess::PUT, $allowedMethods)) {
                            $this->guessClassFromOperation($path, $path->getPut(), $pathName, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
                        }
                    } else {
                        $this->guessClassFromOperation($path, $path->getDelete(), $pathName, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getGet(), $pathName, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getHead(), $pathName, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getOptions(), $pathName, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getPatch(), $pathName, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getPost(), $pathName, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
                        $this->guessClassFromOperation($path, $path->getPut(), $pathName, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
                    }

                    if (is_iterable($path->getParameters())) {
                        foreach ($path->getParameters() as $key => $parameter) {
                            if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                                $this->chainGuesser->guessClass($parameter->getSchema(), $pathName . 'Body' . $key, $reference . '/' . $pathName . '/parameters/' . $key, $registry);
                            }
                        }
                    }
                }
            }
        }

        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getParameters())) {
            foreach ($object->getComponents()->getParameters() as $parameterName => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $parameterName, $reference . '/parameters/' . $parameterName, $registry);
                }
            }
        }
    }

    private function isWhitelisted(string $path, array $whitelistedPaths): ?array
    {
        foreach ($whitelistedPaths as $data) {
            $whitelistedPath = $data;
            $whitelistedMethods = [];
            if (\is_string($data) || (\is_array($data) && 1 === \count($data))) {
                $whitelistedMethods = [
                    OperationGuess::DELETE,
                    OperationGuess::GET,
                    OperationGuess::HEAD,
                    OperationGuess::OPTIONS,
                    OperationGuess::PATCH,
                    OperationGuess::POST,
                    OperationGuess::PUT,
                ];
            } elseif (\is_array($data) && 2 === \count($data)) {
                $whitelistedMethods = $data[1];
                if (\is_string($whitelistedMethods)) {
                    $whitelistedMethods = [$whitelistedMethods];
                }
            }
            if (\is_array($data)) {
                $whitelistedPath = $data[0];
            }

            if (preg_match(\sprintf('#%s#', $whitelistedPath), $path)) {
                return $whitelistedMethods;
            }
        }

        return null;
    }

    protected function guessClassFromOperation(PathItem $pathItem, ?Operation $operation, string $path, string $operationType, string $reference, array $globalSecurityScopes, OpenApiRegistry $registry): void
    {
        if (null === $operation) {
            return;
        }

        $securityScopes = $globalSecurityScopes;
        foreach ($operation->getSecurity() ?? [] as $securityItem) {
            foreach ($securityItem as $scope => $_) {
                $securityScopes[] = $scope;
            }
        }
        $securityScopes = array_unique($securityScopes);

        $name = $path . ucfirst(strtolower($operationType));
        $reference = $reference . '/' . $path . '/' . strtolower($operationType);
        $operationGuess = new OperationGuess($pathItem, $operation, $path, $operationType, $reference, $securityScopes);
        $operationName = $this->naming->getEndpointName($operationGuess);

        if (($schema = $registry->getSchema($reference)) === null) {
            throw new \RuntimeException("Schema for reference $reference could not be found");
        }
        $schema->addOperation($reference, $operationGuess);
        $schema->initOperationRelations($operationName);

        if (null !== $operation->getParameters() && \count($operation->getParameters()) > 0) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                    $subReference = $reference . '/parameters/' . $key;
                    $this->chainGuesser->guessClass($parameter->getSchema(), $name . 'Body', $subReference, $registry);
                    if (null !== ($guessClass = $schema->getClass($subReference))) {
                        $schema->addOperationRelation($operationName, $guessClass->getName());
                    }
                }
            }
        }

        if (($requestBody = $operation->getRequestBody()) instanceof Reference) {
            $requestBody = $this->resolve($requestBody, RequestBody::class);
            $operation->setRequestBody($requestBody);
        }

        if ($operation->getRequestBody() instanceof RequestBody && is_iterable($operation->getRequestBody()->getContent())) {
            foreach ($operation->getRequestBody()->getContent() as $contentType => $content) {
                $subReference = $reference . '/requestBody/content/' . $contentType . '/schema';
                $this->chainGuesser->guessClass($content->getSchema(), $name . 'Body', $subReference, $registry);
                if (null !== ($guessClass = $schema->getClass($subReference))) {
                    $schema->addOperationRelation($operationName, $guessClass->getName());
                }
            }
        }

        if (is_iterable($operation->getResponses())) {
            foreach ($operation->getResponses() as $status => $response) {
                if ($response instanceof Response && $response->getContent()) {
                    $contentCount = \count($response->getContent());
                    foreach ($response->getContent() as $contentType => $content) {
                        // Make sure the response class names are unique when we have multiple response types.
                        $responseName = $contentCount > 1
                            ? $name . $this->slugContentType($contentType) . 'Response' . $status
                            : $name . 'Response' . $status;
                        $subReference = $reference . '/responses/' . $status . '/content/' . $contentType . '/schema';
                        $this->chainGuesser->guessClass($content->getSchema(), $responseName, $subReference, $registry);
                        if (null !== ($guessClass = $schema->getClass($subReference))) {
                            $schema->addOperationRelation($operationName, $guessClass->getName());
                        }
                    }
                }
            }
        }
    }

    private function slugContentType($contentType): string
    {
        return ucfirst(str_replace('application', '', $this->slugger->slug($contentType, '')));
    }

    private function getApplicationProblemJsonDefaultSchema(): Schema
    {
        return (new Schema())
            ->setType('object')
            ->setProperties(
                new \ArrayObject([
                    'status' => (new Schema())
                        ->setType('integer'),
                    'title' => (new Schema())
                        ->setType('string'),
                    'type' => (new Schema())
                        ->setType('string')
                        ->setDefault('about:blank'),
                    'detail' => (new Schema())
                        ->setType('string'),
                ])
            )
            ->setAdditionalProperties(true)
            ->setRequired(['type']);
    }
}
