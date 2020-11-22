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
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

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
        if (null !== $object->getDefinitions()) {
            foreach ($object->getDefinitions() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/definitions/' . $key, $registry);
            }
        }
        if (null !== $object->getSecurityDefinitions() && is_iterable($object->getSecurityDefinitions())) {
            foreach ($object->getSecurityDefinitions() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/securityDefinitions/' . $key, $registry);
            }
        }

        if ($object->getResponses()) {
            foreach ($object->getResponses() as $responseName => $response) {
                $this->chainGuesser->guessClass($response->getSchema(), 'Response' . ucfirst($responseName), $reference . '/responses/' . $responseName, $registry);
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

                    if ($path->getParameters()) {
                        foreach ($path->getParameters() as $key => $parameter) {
                            if ($parameter instanceof BodyParameter) {
                                $this->chainGuesser->guessClass($parameter->getSchema(), $pathName . 'Body' . $key, $reference . '/' . $pathName . '/parameters/' . $key, $registry);
                            }
                        }
                    }
                }
            }
        }

        if ($object->getParameters()) {
            foreach ($object->getParameters() as $parameterName => $parameter) {
                if ($parameter instanceof BodyParameter) {
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
                $whitelistedPath = $data[0];
                $whitelistedMethods = $data[1];
                if (\is_string($whitelistedMethods)) {
                    $whitelistedMethods = [$whitelistedMethods];
                }
            }

            if (preg_match(sprintf('#%s#', $whitelistedPath), $path)) {
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

        $schema = $registry->getSchema($reference);
        $schema->addOperation($reference, $operationGuess);

        if ($operation->getParameters()) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof BodyParameter) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $name . 'Body', $reference . '/parameters/' . $key, $registry);
                }
            }
        }

        if ($operation->getResponses()) {
            foreach ($operation->getResponses() as $status => $response) {
                if ($response instanceof Response) {
                    $this->chainGuesser->guessClass($response->getSchema(), $name . 'Response' . $status, $reference . '/responses/' . $status, $registry);
                }
            }
        }
    }
}
