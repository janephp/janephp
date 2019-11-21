<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Registry;
use Jane\OpenApi\JsonSchema\Model\Components;
use Jane\OpenApi\JsonSchema\Model\Operation;
use Jane\OpenApi\JsonSchema\Model\Parameter;
use Jane\OpenApi\JsonSchema\Model\PathItem;
use Jane\OpenApi\JsonSchema\Model\Response;
use Jane\OpenApi\JsonSchema\Model\OpenApi;

class OpenApiGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    private const IN_BODY = 'body';

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
                        $this->chainGuesser->guessClass($content->getSchema(), 'Response' . ucfirst($responseName), $reference . '/components/responses/' . $responseName . '/content/' . $contentType . '/schema', $registry);
                    }
                }
            }
        }

        if (is_iterable($object->getPaths())) {
            foreach ($object->getPaths() as $pathName => $path) {
                if ($path instanceof PathItem) {
                    $this->getClassFromOperation($pathName . 'Delete', $path->getDelete(), $reference . '/' . $pathName . '/delete', $registry);
                    $this->getClassFromOperation($pathName . 'Get', $path->getGet(), $reference . '/' . $pathName . '/get', $registry);
                    $this->getClassFromOperation($pathName . 'Head', $path->getHead(), $reference . '/' . $pathName . '/head', $registry);
                    $this->getClassFromOperation($pathName . 'Options', $path->getOptions(), $reference . '/' . $pathName . '/options', $registry);
                    $this->getClassFromOperation($pathName . 'Patch', $path->getPatch(), $reference . '/' . $pathName . '/patch', $registry);
                    $this->getClassFromOperation($pathName . 'Post', $path->getPost(), $reference . '/' . $pathName . '/post', $registry);
                    $this->getClassFromOperation($pathName . 'Put', $path->getPut(), $reference . '/' . $pathName . '/put', $registry);

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

        if (null !== $operation->getParameters() && \count($operation->getParameters()) > 0) {
            foreach ($operation->getParameters() as $key => $parameter) {
                if ($parameter instanceof Parameter && self::IN_BODY === $parameter->getIn()) {
                    $this->chainGuesser->guessClass($parameter->getSchema(), $name . 'Body', $reference . '/parameters/' . $key, $registry);
                }
            }
        }

        if ($operation->getRequestBody() && $operation->getRequestBody()->getContent()) {
            foreach ($operation->getRequestBody()->getContent() as $contentType => $content) {
                $this->chainGuesser->guessClass($content->getSchema(), $name . 'Body', $reference . '/requestBody/content/' . $contentType . '/schema', $registry);
            }
        }

        if ($operation->getResponses()) {
            foreach ($operation->getResponses() as $status => $response) {
                if ($response instanceof Response && $response->getContent()) {
                    foreach ($response->getContent() as $contentType => $content) {
                        $this->chainGuesser->guessClass($content->getSchema(), $name . 'Response' . $status, $reference . '/responses/' . $status . '/content/' . $contentType . '/schema', $registry);
                    }
                }
            }
        }
    }
}
