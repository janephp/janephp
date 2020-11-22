<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class DefinitionGuesser implements ChainGuesserAwareInterface, GuesserInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
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
    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && null !== $object->getDefinitions() && \count($object->getDefinitions()) > 0;
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
