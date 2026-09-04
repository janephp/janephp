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
use Jane\Component\OpenApiCommon\Naming\FetchModeResolver;
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
    private FetchModeResolver $fetchModeResolver;

    public function __construct(DenormalizerInterface $denormalizer, ?OperationNamingInterface $naming = null, ?string $defaultFetchMode = null)
    {
        $this->denormalizer = $denormalizer;
        $this->slugger = new AsciiSlugger();
        $this->naming = $naming ?? OperationNamingFactory::create();
        $this->xNamespaceResolver = new XNamespaceResolver();
        $this->fetchModeResolver = new FetchModeResolver($defaultFetchMode);
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
        if (($object->components ?? null) instanceof Components && is_iterable(($object->components ?? null)->schemas ?? null)) {
            foreach (($object->components ?? null)->schemas as $key => $definition) {
                $definitionReference = $reference . '/components/schemas/' . $key;
                $this->chainGuesser->guessClass($definition, $key, $definitionReference, $registry);
                $this->xNamespaceResolver->stampClassGuess($registry, $definitionReference, $definition);
            }
        }
        if (($object->components ?? null) instanceof Components && is_iterable(($object->components ?? null)->securitySchemes ?? null)) {
            foreach (($object->components ?? null)->securitySchemes as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/components/securitySchemes/' . $key, $registry);
            }
        }

        if (($object->components ?? null) instanceof Components && is_iterable(($object->components ?? null)->responses ?? null)) {
            foreach (($object->components ?? null)->responses as $responseName => $response) {
                if (\is_array($response)) {
                    $response = $this->denormalizeResponseData($response, $reference . '/components/responses/' . $responseName);
                }

                if ($response instanceof Response && is_iterable($response->content ?? null)) {
                    foreach (($response->content ?? null ?? []) as $contentType => $content) {
                        if ($contentType === 'application/problem+json' && $content->schema === null) {
                            $content->schema = $this->getApplicationProblemJsonDefaultSchema();
                        }

                        $this->chainGuesser->guessClass($content->schema ?? null, 'Response' . ucfirst($responseName), $reference . '/components/responses/' . $responseName . '/content/' . $contentType . '/schema', $registry);
                    }
                }
            }
        }

        $this->guessPaths($object, $reference, $registry);
        $this->guessWebhooks($object, $reference, $registry);

        if (($object->components ?? null) instanceof Components && is_iterable(($object->components ?? null)->parameters ?? null)) {
            foreach (($object->components ?? null)->parameters as $parameterName => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === ($parameter->in ?? null)) {
                    $this->chainGuesser->guessClass($parameter->schema ?? null, $parameterName, $reference . '/parameters/' . $parameterName, $registry);
                }
            }
        }
    }

    private function guessPaths(OpenApi $object, string $reference, OpenApiRegistry $registry): void
    {
        if (!is_iterable($object->paths ?? null)) {
            return;
        }

        $whitelistedPaths = $registry->getWhitelistedPaths() ?? [];
        $checkWhitelistedPaths = \count($whitelistedPaths) > 0;

        $globalSecurityScopes = [];
        foreach (($object->security ?? null) ?? [] as $securityItem) {
            foreach ($securityItem as $scope => $_) {
                $globalSecurityScopes[] = $scope;
            }
        }

        foreach (($object->paths ?? null ?? []) as $pathName => $path) {
            if ($checkWhitelistedPaths && null === ($allowedMethods = $this->isWhitelisted($pathName, $whitelistedPaths))) {
                continue;
            }

            if ($path instanceof PathItem) {
                if ($checkWhitelistedPaths) {
                    if (\in_array(OperationGuess::DELETE, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->delete ?? null, $pathName, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::GET, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->get ?? null, $pathName, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::HEAD, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->head ?? null, $pathName, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::OPTIONS, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->options ?? null, $pathName, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::PATCH, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->patch ?? null, $pathName, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::POST, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->post ?? null, $pathName, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
                    }
                    if (\in_array(OperationGuess::PUT, $allowedMethods)) {
                        $this->guessClassFromOperation($path, $path->put ?? null, $pathName, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
                    }
                } else {
                    $this->guessClassFromOperation($path, $path->delete ?? null, $pathName, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->get ?? null, $pathName, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->head ?? null, $pathName, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->options ?? null, $pathName, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->patch ?? null, $pathName, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->post ?? null, $pathName, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
                    $this->guessClassFromOperation($path, $path->put ?? null, $pathName, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
                }

                if (is_iterable($path->parameters ?? null)) {
                    foreach (($path->parameters ?? null ?? []) as $key => $parameter) {
                        if ($parameter instanceof Parameter && self::IN_BODY === ($parameter->in ?? null)) {
                            $this->chainGuesser->guessClass($parameter->schema ?? null, $pathName . 'Body' . $key, $reference . '/' . $pathName . '/parameters/' . $key, $registry);
                        }
                    }
                }
            }
        }
    }

    private function guessWebhooks(OpenApi $object, string $reference, OpenApiRegistry $registry): void
    {
        if (!is_iterable($object->webhooks ?? null)) {
            return;
        }

        $globalSecurityScopes = [];
        foreach (($object->security ?? null) ?? [] as $securityItem) {
            foreach ($securityItem as $scope => $_) {
                $globalSecurityScopes[] = $scope;
            }
        }

        foreach (($object->webhooks ?? null ?? []) as $webhookName => $pathItem) {
            if (!$pathItem instanceof PathItem) {
                continue;
            }

            $webhookPath = '/webhooks/' . $webhookName;

            $this->guessClassFromOperation($pathItem, $pathItem->delete ?? null, $webhookPath, OperationGuess::DELETE, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->get ?? null, $webhookPath, OperationGuess::GET, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->head ?? null, $webhookPath, OperationGuess::HEAD, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->options ?? null, $webhookPath, OperationGuess::OPTIONS, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->patch ?? null, $webhookPath, OperationGuess::PATCH, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->post ?? null, $webhookPath, OperationGuess::POST, $reference, $globalSecurityScopes, $registry);
            $this->guessClassFromOperation($pathItem, $pathItem->put ?? null, $webhookPath, OperationGuess::PUT, $reference, $globalSecurityScopes, $registry);
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
        foreach (($operation->security ?? null) ?? [] as $securityItem) {
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

        if (\in_array($operationType, [OperationGuess::GET, OperationGuess::HEAD], true)) {
            $operationGuess->setFetchMode($this->fetchModeResolver->resolveFromObject($operation));
        }

        if (null !== ($operation->parameters ?? null) && \count($operation->parameters ?? null) > 0) {
            foreach (($operation->parameters ?? null ?? []) as $key => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === ($parameter->in ?? null)) {
                    $subReference = $reference . '/parameters/' . $key;
                    $this->chainGuesser->guessClass($parameter->schema ?? null, $name . 'Body', $subReference, $registry);
                    if (null !== ($parameter->schema ?? null)) {
                        $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $parameter->schema ?? null);
                    }
                    if (null !== ($guessClass = $schema->getClass($subReference))) {
                        $schema->addOperationRelation($operationName, $guessClass->getName());
                    }
                }
            }
        }

        if (($requestBody = ($operation->requestBody ?? null)) instanceof Reference) {
            $requestBody = $this->resolve($requestBody, RequestBody::class);
            $operation->requestBody = $requestBody;
        }

        if (($operation->requestBody ?? null) instanceof RequestBody && is_iterable(($operation->requestBody ?? null)->content)) {
            foreach (($operation->requestBody ?? null)->content as $contentType => $content) {
                $subReference = $reference . '/requestBody/content/' . $contentType . '/schema';
                $this->chainGuesser->guessClass($content->schema ?? null, $name . 'Body', $subReference, $registry);
                if (null !== ($content->schema ?? null)) {
                    $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $content->schema ?? null);
                }
                if (null !== ($guessClass = $schema->getClass($subReference))) {
                    $schema->addOperationRelation($operationName, $guessClass->getName());
                }
            }
        }

        if (is_iterable($operation->responses ?? null)) {
            foreach (($operation->responses ?? null ?? []) as $status => $response) {
                if (\is_array($response)) {
                    $response = $this->denormalizeResponseData($response, $reference . '/responses/' . $status);
                }

                if ($response instanceof Response && ($response->content ?? null)) {
                    $contentCount = \count($response->content ?? null);
                    foreach (($response->content ?? null ?? []) as $contentType => $content) {
                        $responseName = $contentCount > 1
                            ? $name . $this->slugContentType($contentType) . 'Response' . $status
                            : $name . 'Response' . $status;
                        $subReference = $reference . '/responses/' . $status . '/content/' . $contentType . '/schema';
                        $this->chainGuesser->guessClass($content->schema ?? null, $responseName, $subReference, $registry);
                        if (null !== ($content->schema ?? null)) {
                            $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $content->schema ?? null);
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
        $parameters = ($pathItem->parameters ?? null);
        if (!is_iterable($parameters)) {
            return;
        }

        $normalizedParameters = [];
        foreach ($parameters as $key => $parameter) {
            $normalizedParameters[] = $this->coerceParameterValue($parameter, $reference . '/parameters/' . $key);
        }

        $pathItem->parameters = $normalizedParameters;
    }

    private function normalizeOperationInputs(Operation $operation, string $reference): void
    {
        $parameters = ($operation->parameters ?? null);
        if (is_iterable($parameters)) {
            $normalizedParameters = [];
            foreach ($parameters as $key => $parameter) {
                $normalizedParameters[] = $this->coerceParameterValue($parameter, $reference . '/parameters/' . $key);
            }

            $operation->parameters = $normalizedParameters;
        }

        $requestBody = ($operation->requestBody ?? null);
        if (\is_array($requestBody)) {
            $operation->requestBody = $this->coerceRequestBodyValue($requestBody, $reference . '/requestBody');
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
        $schema->type = 'object';

        $status = new Schema();
        $status->type = 'integer';

        $title = new Schema();
        $title->type = 'string';

        $type = new Schema();
        $type->type = 'string';
        $type->default = 'about:blank';

        $detail = new Schema();
        $detail->type = 'string';

        $schema->properties = [
            'status' => $status,
            'title' => $title,
            'type' => $type,
            'detail' => $detail,
        ];
        $schema->additionalProperties = true;
        $schema->required = ['type'];

        return $schema;
    }
}
