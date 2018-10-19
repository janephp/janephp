<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;

class DefinitionGuesser implements ChainGuesserAwareInterface, GuesserInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        /**
         * @var string
         * @var JsonSchema $definition
         */
        foreach ($object->getDefinitions() as $key => $definition) {
            $this->chainGuesser->guessClass($definition, $key, $reference . '/definitions/' . $key, $registry);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof JsonSchema) && null !== $object->getDefinitions() && \count($object->getDefinitions()) > 0;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return JsonSchema::class;
    }
}
