<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Registry;
use Jane\OpenApi\JsonSchema\Version3\Model\BodyParameter;
use Jane\OpenApi\JsonSchema\Version3\Model\Operation;
use Jane\OpenApi\JsonSchema\Version3\Model\PathItem;
use Jane\OpenApi\JsonSchema\Version3\Model\Response;
use Jane\OpenApi\JsonSchema\Version3\Model\OpenApi;

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
        if ($object->getComponents() && $object->getComponents()->getSchemas()) {
            foreach ($object->getComponents()->getSchemas() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/components/schemas' . $key, $registry);
            }
        }

        if ($object->getComponents() && $object->getComponents()->getResponses()) {
            foreach ($object->getComponents()->getResponses() as $responseName => $response) {
                $this->chainGuesser->guessClass($response->getSchema(), 'Response' . ucfirst($responseName), $reference . '/components/responses/' . $responseName, $registry);
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

        if ($object->getComponents() && $object->getComponents()->getParameters()) {
            foreach ($object->getComponents()->getParameters() as $parameterName => $parameter) {
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
    protected function getClassFromOperation($name, Operation $operation = null, $reference, $registry)
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
