<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Components;
use Jane\Component\OpenApi31\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApi31\JsonSchema\Model\Operation;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi31\JsonSchema\Model\PathItem;
use Jane\Component\OpenApi31\JsonSchema\Model\RequestBody;
use Jane\Component\OpenApi31\JsonSchema\Model\Response;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApi31\JsonSchema\Normalizer\ResponseNormalizer;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
use Jane\Component\OpenApiCommon\Registry\Schema as OpenApiRegistrySchema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    private const IN_BODY = 'body';
    private SluggerInterface $slugger;
    private OperationNamingInterface $naming;
    private XNamespaceResolver $xNamespaceResolver;

    public function __construct(DenormalizerInterface $denormalizer, ?OperationNamingInterface $naming = null)
    {
        $this->denormalizer = $denormalizer;
        $this->slugger = new AsciiSlugger();
        $this->naming = $naming ?? OperationNamingFactory::create();
        $this->xNamespaceResolver = new XNamespaceResolver();
    }

    public function supportObject($object): bool
    {
        return $object instanceof OpenApi;
    }

    /**
     * @param OpenApi         $object
     * @param OpenApiRegistry $registry
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getSchemas())) {
            foreach ($object->getComponents()->getSchemas() as $key => $definition) {
                $definitionReference = $reference . '/components/schemas/' . $key;
                $this->chainGuesser->guessClass($definition, $key, $definitionReference, $registry);
                $this->xNamespaceResolver->stampClassGuess($registry, $definitionReference, $definition);
            }
        }
        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getSecuritySchemes())) {
            foreach ($object->getComponents()->getSecuritySchemes() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/components/securitySchemes/' . $key, $registry);
            }
        }

        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getResponses())) {
            foreach ($object->getComponents()->getResponses() as $responseName => $response) {
                if (\is_array($response)) {
                    $response = $this->denormalizeResponseData($response, $reference . '/components/responses/' . $responseName);
                }

                if ($response instanceof Response && is_iterable($response->getContent())) {
                    foreach ($response->getContent() as $contentType => $content) {
                        if ($contentType === 'application/problem+json' && $content->getSchema() === null) {
                            $content->setSchema($this->getApplicationProblemJsonDefaultSchema());
                        }

                        $this->chainGuesser->guessClass($content->getSchema(), 'Response' . ucfirst($responseName), $reference . '/components/responses/' . $responseName . '/content/' . $contentType . '/schema', $registry);
                    }
                }
            }
        }

        $this->guessPaths($object, $reference, $registry);
        $this->guessWebhooks($object, $reference, $registry);

        if ($object->getComponents() instanceof Components && is_iterable($object->getComponents()->getParameters())) {
            foreach ($object->getComponents()->getParameters() as $parameterName => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $parameterName, $reference . '/parameters/' . $parameterName, $registry);
                }
            }
        }
    }

    private function guessPaths(OpenApi $object, string $reference, OpenApiRegistry $registry): void
    {
        if (!is_iterable($object->getPaths())) {
            return;
        }

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

    private function guessWebhooks(OpenApi $object, string $reference, OpenApiRegistry $registry): void
    {
        if (!is_iterable($object->getWebhooks())) {
            return;
        }

        $globalSecurityScopes = [];
        foreach ($object->getSecurity() ?? [] as $securityItem) {
            foreach ($securityItem as $scope => $_) {
                $globalSecurityScopes[] = $scope;
            }
        }

        foreach ($object->getWebhooks() as $webhookName => $pathItem) {
            if (!$pathItem instanceof PathItem) {
                continue;
            }

            $webhookPath = '/webhooks/' . $webhookName;

            $this->guessClassFromOperation($pathItem, $pathItem->getDelete(), $webhookPath, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getGet(), $webhookPath, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getHead(), $webhookPath, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getOptions(), $webhookPath, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getPatch(), $webhookPath, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getPost(), $webhookPath, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->getPut(), $webhookPath, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
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

        $this->normalizePathItemParameters($pathItem, $reference);
        $this->normalizeOperationInputs($operation, $reference);

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

        /** @var OpenApiRegistrySchema|null $schema */
        $schema = $registry->getSchema($reference);
        if ($schema === null) {
            throw new \RuntimeException("Schema for reference $reference could not be found");
        }
        $schema->addOperation($reference, $operationGuess);
        $schema->initOperationRelations($operationName);

        $operationSubNamespace = $this->xNamespaceResolver->resolveFromObject($operation);
        $operationGuess->setSubNamespace($operationSubNamespace);

        if (null !== $operation->getParameters() && \count($operation->getParameters()) > 0) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                    $subReference = $reference . '/parameters/' . $key;
                    $this->chainGuesser->guessClass($parameter->getSchema(), $name . 'Body', $subReference, $registry);
                    if (null !== $parameter->getSchema()) {
                        $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $parameter->getSchema());
                    }
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
                if (null !== $content->getSchema()) {
                    $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $content->getSchema());
                }
                if (null !== ($guessClass = $schema->getClass($subReference))) {
                    $schema->addOperationRelation($operationName, $guessClass->getName());
                }
            }
        }

        if (is_iterable($operation->getResponses())) {
            foreach ($operation->getResponses() as $status => $response) {
                if (\is_array($response)) {
                    $response = $this->denormalizeResponseData($response, $reference . '/responses/' . $status);
                }

                if ($response instanceof Response && $response->getContent()) {
                    $contentCount = \count($response->getContent());
                    foreach ($response->getContent() as $contentType => $content) {
                        $responseName = $contentCount > 1
                            ? $name . $this->slugContentType($contentType) . 'Response' . $status
                            : $name . 'Response' . $status;
                        $subReference = $reference . '/responses/' . $status . '/content/' . $contentType . '/schema';
                        $this->chainGuesser->guessClass($content->getSchema(), $responseName, $subReference, $registry);
                        if (null !== $content->getSchema()) {
                            $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $content->getSchema());
                        }
                        if (null !== ($guessClass = $schema->getClass($subReference))) {
                            $schema->addOperationRelation($operationName, $guessClass->getName());
                        }
                    }
                }
            }
        }

        $this->xNamespaceResolver->propagateToOperationModels($schema, $operationGuess, $operationSubNamespace);
    }

    private function slugContentType($contentType): string
    {
        return ucfirst(str_replace('application', '', $this->slugger->slug($contentType, '')));
    }

    private function denormalizeResponseData(array $responseData, string $reference): mixed
    {
        if (isset($responseData['$ref'])) {
            $origin = strstr($reference, '#', true) ?: $reference;

            return new Reference($responseData['$ref'], $origin);
        }

        $normalizer = new ResponseNormalizer();
        $normalizer->setDenormalizer($this->denormalizer);

        return $normalizer->denormalize(
            $responseData,
            Response::class,
            'json',
            ['document-origin' => strstr($reference, '#', true) ?: $reference]
        );
    }

    private function normalizePathItemParameters(PathItem $pathItem, string $reference): void
    {
        $parameters = $pathItem->getParameters();
        if (!is_iterable($parameters)) {
            return;
        }

        $normalizedParameters = [];
        foreach ($parameters as $key => $parameter) {
            $normalizedParameters[] = $this->coerceParameterValue($parameter, $reference . '/parameters/' . $key);
        }

        $pathItem->setParameters($normalizedParameters);
    }

    private function normalizeOperationInputs(Operation $operation, string $reference): void
    {
        $parameters = $operation->getParameters();
        if (is_iterable($parameters)) {
            $normalizedParameters = [];
            foreach ($parameters as $key => $parameter) {
                $normalizedParameters[] = $this->coerceParameterValue($parameter, $reference . '/parameters/' . $key);
            }

            $operation->setParameters($normalizedParameters);
        }

        $requestBody = $operation->getRequestBody();
        if (\is_array($requestBody)) {
            $operation->setRequestBody($this->coerceRequestBodyValue($requestBody, $reference . '/requestBody'));
        }
    }

    private function coerceParameterValue(mixed $parameter, string $reference): mixed
    {
        if (!\is_array($parameter)) {
            return $parameter;
        }

        if (isset($parameter['$ref'])) {
            return new Reference($parameter['$ref'], $reference);
        }

        if (isset($parameter['name'], $parameter['in'])) {
            return $this->denormalizer->denormalize($parameter, Parameter::class, 'json', ['document-origin' => $reference]);
        }

        return $parameter;
    }

    private function coerceRequestBodyValue(array $requestBody, string $reference): mixed
    {
        if (isset($requestBody['$ref'])) {
            return new Reference($requestBody['$ref'], $reference);
        }

        if (isset($requestBody['content'])) {
            return $this->denormalizer->denormalize($requestBody, RequestBody::class, 'json', ['document-origin' => $reference]);
        }

        return $requestBody;
    }

    private function getApplicationProblemJsonDefaultSchema(): Schema
    {
        $schema = new Schema();
        $schema->setType('object');

        $status = new Schema();
        $status->setType('integer');

        $title = new Schema();
        $title->setType('string');

        $type = new Schema();
        $type->setType('string');
        $type->setDefault('about:blank');

        $detail = new Schema();
        $detail->setType('string');

        $schema->setProperties([
            'status' => $status,
            'title' => $title,
            'type' => $type,
            'detail' => $detail,
        ]);
        $schema->setAdditionalProperties(true);
        $schema->setRequired(['type']);

        return $schema;
    }
}
