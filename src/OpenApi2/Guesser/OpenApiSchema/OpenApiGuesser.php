<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Registry;
use Jane\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\OpenApi2\JsonSchema\Model\Operation;
use Jane\OpenApi2\JsonSchema\Model\PathItem;
use Jane\OpenApi2\JsonSchema\Model\Response;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Registry as OpenApiRegistry;

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

            foreach ($object->getPaths() as $pathName => $path) {
                if ($checkWhitelistedPaths && !$this->isWhitelisted($pathName, $whitelistedPaths)) {
                    continue;
                }

                if ($path instanceof PathItem) {
                    $this->guessClassFromOperation($path, $path->getDelete(), $pathName, OperationGuess::DELETE, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getGet(), $pathName, OperationGuess::GET, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getHead(), $pathName, OperationGuess::HEAD, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getOptions(), $pathName, OperationGuess::OPTIONS, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getPatch(), $pathName, OperationGuess::PATCH, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getPost(), $pathName, OperationGuess::POST, $reference, $registry);
                    $this->guessClassFromOperation($path, $path->getPut(), $pathName, OperationGuess::PUT, $reference, $registry);

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

    private function isWhitelisted(string $path, array $whitelistedPaths): bool
    {
        foreach ($whitelistedPaths as $whitelistedPath) {
            if (preg_match(sprintf('#%s#', $whitelistedPath), $path)) {
                return true;
            }
        }

        return false;
    }

    protected function guessClassFromOperation(PathItem $pathItem, ?Operation $operation, string $path, string $operationType, string $reference, OpenApiRegistry $registry): void
    {
        if (null === $operation) {
            return;
        }

        $name = $path . ucfirst(strtolower($operationType));
        $reference = $reference . '/' . $path . '/' . strtolower($operationType);
        $operationGuess = new OperationGuess($pathItem, $operation, $path, $operationType, $reference);

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
