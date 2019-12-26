<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Registry;
use Jane\OpenApi2\Model\BodyParameter;
use Jane\OpenApi2\Model\OpenApi;
use Jane\OpenApi2\Model\Operation;
use Jane\OpenApi2\Model\PathItem;
use Jane\OpenApi2\Model\Response;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return $object instanceof OpenApi;
    }

    /**
     * {@inheritdoc}
     *
     * @param OpenApi $object
     */
    public function guessClass($object, $name, $reference, Registry $registry)
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

        if ($object->getPaths()) {
            foreach ($object->getPaths() as $pathName => $path) {
                if ($path instanceof PathItem) {
                    $this->getClassFromOperation($pathName . 'Delete', $path->getDelete(), $reference . '/' . $pathName . '/delete', $registry);
                    $this->getClassFromOperation($pathName . 'Get', $path->getGet(), $reference . '/' . $pathName . '/get', $registry);
                    $this->getClassFromOperation($pathName . 'Head', $path->getHead(), $reference . '/' . $pathName . '/head', $registry);
                    $this->getClassFromOperation($pathName . 'Options', $path->getOptions(), $reference . '/' . $pathName . '/options', $registry);
                    $this->getClassFromOperation($pathName . 'Patch', $path->getPatch(), $reference . '/' . $pathName . '/patch', $registry);
                    $this->getClassFromOperation($pathName . 'Post', $path->getPost(), $reference . '/' . $pathName . '/post', $registry);
                    $this->getClassFromOperation($pathName . 'Put', $path->getPut(), $reference . '/' . $pathName . '/put', $registry);

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

    /**
     * Discover classes in operation.
     *
     * @param $name
     * @param Operation $operation
     * @param string    $reference
     * @param Registry  $registry
     */
    protected function getClassFromOperation($name, ?Operation $operation, $reference, $registry)
    {
        if (null === $operation) {
            return;
        }

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
