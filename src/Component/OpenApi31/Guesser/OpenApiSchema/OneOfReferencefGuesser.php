<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class OneOfReferencefGuesser implements ChainGuesserAwareInterface, GuesserInterface, TypeGuesserInterface
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
        if (!($object instanceof Schema) || !\is_array($object->getOneOf()) || [] === $object->getOneOf()) {
            return false;
        }

        if ($object->getOneOf()[0] instanceof Reference) {
            return true;
        }

        foreach ($object->getOneOf() as $oneOf) {
            if (!$oneOf instanceof Schema || !\is_array($oneOf->getAllOf())) {
                continue;
            }
            foreach ($oneOf->getAllOf() as $allOf) {
                if ($allOf instanceof Reference) {
                    return true;
                }
            }
        }

        return false;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        if ($object instanceof Schema) {
            $mapping = null;
            $supportsDiscriminator = false;
            $discriminator = $object->getDiscriminator();
            if (null !== $discriminator && null !== $discriminator->getPropertyName()) {
                $supportsDiscriminator = true;
                $type->setDiscriminatorProperty($discriminator->getPropertyName());
                if ($discriminator->getMapping()) {
                    $mapping = array_flip((array) $discriminator->getMapping());
                }
            }
            foreach ($object->getOneOf() as $index => $oneOf) {
                if ($oneOf === null) {
                    continue;
                }
                $oneOfSchema = $oneOf;
                $oneOfReference = $reference . '/oneOf/' . $index;

                if ($oneOf instanceof Reference) {
                    $oneOfReference = (string) $oneOf->getMergedUri();

                    if ((string) $oneOf->getMergedUri() === (string) $oneOf->getMergedUri()->withFragment('')) {
                        $oneOfReference .= '#';
                    }

                    $oneOfSchema = $this->resolve($oneOfSchema, $this->schemaClass);
                }
                $hasContent = null !== $oneOfSchema->getType()
                    || (\is_array($oneOfSchema->getAllOf()) && [] !== $oneOfSchema->getAllOf())
                    || (\is_array($oneOfSchema->getAnyOf()) && [] !== $oneOfSchema->getAnyOf());

                if ($hasContent) {
                    $oneOfType = $this->chainGuesser->guessType($oneOfSchema, $name, $oneOfReference, $registry);
                    if ($supportsDiscriminator && $oneOf instanceof Reference) {
                        $objectRef = '#' . $oneOf->getMergedUri()->getFragment();
                        $type->addType($oneOfType, null !== $mapping ? ($mapping[$objectRef] ?? $objectRef) : $objectRef);
                    } else {
                        $type->addType($oneOfType);
                    }
                }
            }
        }

        return $type;
    }
}
