<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\JsonSchema\OneOfGuesser as BaseOneOfGuesser;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class OneOfGuesser extends BaseOneOfGuesser
{
    use GuesserResolverTrait;
    use SchemaClassTrait;

    public function __construct(DenormalizerInterface $denormalizer, string $schemaClass)
    {
        $this->denormalizer = $denormalizer;
        $this->schemaClass = $schemaClass;
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class)
            && ('object' !== ($object->type ?? null) || self::isObjectTypedUnion($object))
            && \is_array($object->oneOf ?? null)
            && \count($object->oneOf ?? null) > 0;
    }

    /**
     * Whether a `type: object` schema only carries a `oneOf` (no own properties) whose branches are all
     * references or inline non-object schemas: such a schema is a union of its branches, not a map.
     *
     * Inline object branches are excluded as no class is guessed for them.
     */
    public static function isObjectTypedUnion($object): bool
    {
        return 'object' === ($object->type ?? null)
            && [] === (array) ($object->properties ?? [])
            && self::hasOnlyNonObjectBranches($object);
    }

    /**
     * Whether every `oneOf` branch is a reference or an inline schema not describing an object.
     */
    public static function hasOnlyNonObjectBranches($object): bool
    {
        if (!\is_array($object->oneOf ?? null) || 0 === \count($object->oneOf ?? null)) {
            return false;
        }

        foreach (($object->oneOf ?? []) as $oneOf) {
            if ($oneOf instanceof Reference) {
                continue;
            }

            if (!\is_object($oneOf)) {
                return false;
            }

            $type = $oneOf->type ?? null;
            if ((\is_array($type) ? \in_array('object', $type, true) : 'object' === $type)
                || [] !== (array) ($oneOf->properties ?? [])
                || [] !== ($oneOf->allOf ?? [])
                || [] !== ($oneOf->anyOf ?? [])
                || [] !== ($oneOf->oneOf ?? [])) {
                return false;
            }
        }

        return true;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        $mapping = null;
        $supportsDiscriminator = false;

        if (property_exists($object, 'discriminator') && ($object->discriminator ?? null)
            && \is_object($object->discriminator ?? null) && property_exists($object->discriminator ?? null, 'propertyName')
            && ($object->discriminator ?? null)->propertyName) {
            $supportsDiscriminator = true;
            $type->setDiscriminatorProperty(($object->discriminator ?? null)->propertyName);

            if (property_exists($object->discriminator ?? null, 'mapping') && ($object->discriminator ?? null)->mapping) {
                $mapping = array_flip((array) ($object->discriminator ?? null)->mapping);
            }
        }

        foreach (($object->oneOf ?? null ?? []) as $oneOfKey => $oneOf) {
            if (null === $oneOf) {
                continue;
            }

            $oneOfSchema = $oneOf;
            $oneOfReference = $reference . '/oneOf/' . $oneOfKey;

            if ($oneOf instanceof Reference) {
                $oneOfReference = (string) $oneOf->getMergedUri();

                if ((string) $oneOf->getMergedUri() === (string) $oneOf->getMergedUri()->withFragment('')) {
                    $oneOfReference .= '#';
                }

                $oneOfSchema = $this->resolve($oneOf, $this->getSchemaClass());
            }

            $oneOfType = $this->chainGuesser->guessType($oneOfSchema, $name, $oneOfReference, $registry);

            if ($supportsDiscriminator && $oneOf instanceof Reference) {
                $objectRef = '#' . $oneOf->getMergedUri()->getFragment();
                $type->addType($oneOfType, $mapping[$objectRef] ?? $objectRef);
            } else {
                $type->addType($oneOfType);
            }
        }

        return $type;
    }
}
