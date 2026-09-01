<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class AnyOfReferencefGuesser implements ChainGuesserAwareInterface, ClassGuesserInterface, GuesserInterface, TypeGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    public function __construct(
        DenormalizerInterface $denormalizer,
        protected Naming $naming,
        protected string $schemaClass,
    ) {
        $this->denormalizer = $denormalizer;
    }

    public function supportObject($object): bool
    {
        return ($object instanceof Schema) && \is_array($object->anyOf ?? null) && [] !== ($object->anyOf ?? null);
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!($object instanceof Schema) || !\is_array($object->anyOf ?? null)) {
            return;
        }

        foreach (($object->anyOf ?? null ?? []) as $anyOfKey => $anyOfObject) {
            $this->chainGuesser->guessClass($anyOfObject, $name . 'AnyOf', $reference . '/anyOf/' . $anyOfKey, $registry);
        }
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        if ($object instanceof Schema) {
            $mapping = null;
            $supportsDiscriminator = false;
            $discriminator = ($object->discriminator ?? null);
            if (null !== $discriminator && null !== ($discriminator->propertyName ?? null)) {
                $supportsDiscriminator = true;
                $type->setDiscriminatorProperty($discriminator->propertyName ?? null);
                if (($discriminator->mapping ?? []) ?? null) {
                    $mapping = array_flip((array) (($discriminator->mapping ?? []) ?? null));
                }
            }
            foreach (($object->anyOf ?? null ?? []) as $index => $anyOf) {
                if ($anyOf === null) {
                    continue;
                }
                $anyOfSchema = $anyOf;
                $anyOfReference = $reference . '/anyOf/' . $index;

                if ($anyOf instanceof Reference) {
                    $anyOfReference = (string) $anyOf->getMergedUri();

                    if ((string) $anyOf->getMergedUri() === (string) $anyOf->getMergedUri()->withFragment('')) {
                        $anyOfReference .= '#';
                    }

                    $anyOfSchema = $this->resolve($anyOfSchema, $this->schemaClass);
                }
                $hasContent = null !== ($anyOfSchema->type ?? null)
                    || (\is_array($anyOfSchema->allOf) && [] !== $anyOfSchema->allOf)
                    || (\is_array($anyOfSchema->anyOf ?? null) && [] !== ($anyOfSchema->anyOf ?? null));

                if ($hasContent) {
                    $anyOfType = $this->chainGuesser->guessType($anyOfSchema, $name, $anyOfReference, $registry);
                    if ($supportsDiscriminator && $anyOf instanceof Reference) {
                        $objectRef = '#' . $anyOf->getMergedUri()->getFragment();
                        $type->addType($anyOfType, null !== $mapping ? ($mapping[$objectRef] ?? $objectRef) : $objectRef);
                    } else {
                        $type->addType($anyOfType);
                    }
                }
            }
        }

        return $type;
    }
}
