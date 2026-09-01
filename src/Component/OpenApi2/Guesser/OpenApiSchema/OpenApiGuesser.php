<?php

namespace Jane\Component\OpenApi2\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\Component\OpenApi2\JsonSchema\Model\Operation;
use Jane\Component\OpenApi2\JsonSchema\Model\PathItem;
use Jane\Component\OpenApi2\JsonSchema\Model\Response;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\FetchModeResolver;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
use Jane\Component\OpenApiCommon\Registry\Schema;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    private OperationNamingInterface $naming;
    private XNamespaceResolver $xNamespaceResolver;
    private FetchModeResolver $fetchModeResolver;

    public function __construct(?OperationNamingInterface $naming = null, ?string $defaultFetchMode = null)
    {
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
        if (null !== ($object->definitions ?? null)) {
            foreach (($object->definitions ?? null ?? []) as $key => $definition) {
                $definitionReference = $reference . '/definitions/' . $key;
                $this->chainGuesser->guessClass($definition, $key, $definitionReference, $registry);
                $this->xNamespaceResolver->stampClassGuess($registry, $definitionReference, $definition);
            }
        }
        if (null !== ($object->securityDefinitions ?? null) && is_iterable($object->securityDefinitions ?? null)) {
            foreach (($object->securityDefinitions ?? null ?? []) as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/securityDefinitions/' . $key, $registry);
            }
        }

        if ($object->responses ?? null) {
            foreach (($object->responses ?? null ?? []) as $responseName => $response) {
                $this->chainGuesser->guessClass($response->schema ?? null, 'Response' . ucfirst($responseName), $reference . '/responses/' . $responseName, $registry);
            }
        }

        if (is_iterable($object->paths ?? null)) {
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

                    if ($path->parameters ?? null) {
                        foreach (($path->parameters ?? null ?? []) as $key => $parameter) {
                            if ($parameter instanceof BodyParameter) {
                                $this->chainGuesser->guessClass($parameter->schema ?? null, $pathName . 'Body' . $key, $reference . '/' . $pathName . '/parameters/' . $key, $registry);
                            }
                        }
                    }
                }
            }
        }

        if ($object->parameters ?? null) {
            foreach (($object->parameters ?? null ?? []) as $parameterName => $parameter) {
                if ($parameter instanceof BodyParameter) {
                    $this->chainGuesser->guessClass($parameter->schema ?? null, $parameterName, $reference . '/parameters/' . $parameterName, $registry);
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

        /** @var Schema $schema */
        $schema = $registry->getSchema($reference);
        $schema->addOperation($reference, $operationGuess);
        $schema->initOperationRelations($operationName);

        $operationSubNamespace = $this->xNamespaceResolver->resolveFromObject($operation);
        $operationGuess->setSubNamespace($operationSubNamespace);

        if (\in_array($operationType, [OperationGuess::GET, OperationGuess::HEAD], true)) {
            $operationGuess->setFetchMode($this->fetchModeResolver->resolveFromObject($operation));
        }

        if ($operation->parameters ?? null) {
            foreach (($operation->parameters ?? null ?? []) as $key => $parameter) {
                if ($parameter instanceof BodyParameter) {
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

        if ($operation->responses ?? null) {
            foreach (($operation->responses ?? null ?? []) as $status => $response) {
                if ($response instanceof Response) {
                    $subReference = $reference . '/responses/' . $status;
                    $this->chainGuesser->guessClass($response->schema ?? null, $name . 'Response' . $status, $subReference, $registry);
                    if (null !== ($response->schema ?? null)) {
                        $this->xNamespaceResolver->stampClassGuess($registry, $subReference, $response->schema ?? null);
                    }
                    if (null !== ($guessClass = $schema->getClass($subReference))) {
                        $schema->addOperationRelation($operationName, $guessClass->getName());
                    }
                }
            }
        }

        $this->xNamespaceResolver->propagateToOperationModels($schema, $operationGuess, $operationSubNamespace);
    }
}
