<?php

namespace Jane\Component\JsonSchema\Guesser;

/**
 * Shared resolution of the `default-additional-properties` option.
 *
 * The option decides how a schema that leaves `additionalProperties`
 * unspecified is treated: null keeps the component's own default (baked into
 * the parsed model, e.g. OpenApi3 bakes `true` while JsonSchema/OpenApi2 bake
 * null), true forces open, false forces closed. An explicit value in the
 * specification always wins over the option.
 */
trait DefaultAdditionalPropertiesTrait
{
    protected ?bool $defaultAdditionalProperties = null;

    /**
     * Effective value of the additionalProperties keyword: the explicit value
     * from the specification when present, otherwise the configured default
     * when set, otherwise the component's own default.
     *
     * @param object $object
     */
    protected function getEffectiveAdditionalProperties($object): mixed
    {
        if (method_exists($object, 'isInitialized') && $object->isInitialized('additionalProperties')) {
            return $object->getAdditionalProperties();
        }

        if (null !== $this->defaultAdditionalProperties) {
            return $this->defaultAdditionalProperties;
        }

        return $object->getAdditionalProperties();
    }
}
