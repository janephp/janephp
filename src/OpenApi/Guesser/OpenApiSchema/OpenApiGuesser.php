<?php

namespace Joli\Jane\OpenApi\Guesser\OpenApiSchema;

use Joli\Jane\Guesser\ChainGuesserAwareInterface;
use Joli\Jane\Guesser\ChainGuesserAwareTrait;
use Joli\Jane\Guesser\ClassGuesserInterface;
use Joli\Jane\Guesser\GuesserInterface;
use Joli\Jane\OpenApi\Model\BodyParameter;
use Joli\Jane\OpenApi\Model\Operation;
use Joli\Jane\OpenApi\Model\PathItem;
use Joli\Jane\OpenApi\Model\Response;
use Joli\Jane\OpenApi\Model\OpenApi;
use Joli\Jane\Registry;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof OpenApi);
    }

    /**
     * {@inheritDoc}
     *
     * @param OpenApi $object
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        if ($object->getDefinitions() !== null) {
            foreach ($object->getDefinitions() as $key => $definition) {
                $this->chainGuesser->guessClass($definition, $key, $reference . '/definitions/' . $key, $registry);
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
                                $this->chainGuesser->guessClass($parameter->getSchema(), $pathName . 'Body' . $key, $reference . '/' . $pathName . '/parameters/' . $key,  $registry);
                            }
                        }
                    }
                }
            }
        }

        if ($object->getParameters()) {
            foreach ($object->getParameters() as $parameterName => $parameter) {
                if ($parameter instanceof BodyParameter) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $parameterName, $reference . '/parameters/' . $parameterName,  $registry);
                }
            }
        }
    }

    /**
     * Discover classes in operation
     *
     * @param $name
     * @param Operation $operation
     * @param string $reference
     * @param Registry $registry
     */
    protected function getClassFromOperation($name, Operation $operation = null, $reference, $registry)
    {
        if ($operation === null) {
            return;
        }

        if ($operation->getParameters()) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof BodyParameter) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $name . 'Body', $reference . '/parameters/' . $key,  $registry);
                }
            }
        }

        if ($operation->getResponses()) {
            foreach ($operation->getResponses() as $status => $response) {
                if ($response instanceof Response) {
                    $this->chainGuesser->guessClass($response->getSchema(), $name.'Response'.$status, $reference . '/responses/' . $status, $registry);
                }
            }
        }
    }
}
