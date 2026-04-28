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
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class AnyOfReferencefGuesser implements ChainGuesserAwareInterface, GuesserInterface, TypeGuesserInterface
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
        if (!($object instanceof JsonSchema) || !\is_array($object->getAnyOf()) || [] === $object->getAnyOf()) {
            return false;
        }

        foreach ($object->getAnyOf() as $anyOf) {
            if ($anyOf instanceof Reference) {
                return true;
            }
            if ($anyOf instanceof JsonSchema && \is_array($anyOf->getAllOf()) && [] !== $anyOf->getAllOf()) {
                return true;
            }
        }

        return false;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        if ($object instanceof JsonSchema) {
            $mapping = null;
            $supportsDiscriminator = false;
            if (method_exists($object, 'getDiscriminator') && $object->getDiscriminator()
                && \is_object($object->getDiscriminator()) && method_exists($object->getDiscriminator(), 'getPropertyName')
                && $object->getDiscriminator()->getPropertyName()) {
                $supportsDiscriminator = true;
                $type->setDiscriminatorProperty($object->getDiscriminator()->getPropertyName());
                if (method_exists($object->getDiscriminator(), 'getMapping') && $object->getDiscriminator()->getMapping()) {
                    $mapping = array_flip((array) $object->getDiscriminator()->getMapping());
                }
            }
            foreach ($object->getAnyOf() as $index => $anyOf) {
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
                $hasContent = null !== $anyOfSchema->getType()
                    || (\is_array($anyOfSchema->getAllOf()) && [] !== $anyOfSchema->getAllOf())
                    || (\is_array($anyOfSchema->getAnyOf()) && [] !== $anyOfSchema->getAnyOf());

                if ($hasContent) {
                    $anyOfType = $this->chainGuesser->guessType($anyOfSchema, $name, $anyOfReference, $registry);
                    if ($supportsDiscriminator && $anyOf instanceof Reference) {
                        $objectRef = '#' . $anyOf->getMergedUri()->getFragment();
                        $type->addType($anyOfType, $mapping ? $mapping[$objectRef] : $objectRef);
                    } else {
                        $type->addType($anyOfType);
                    }
                }
            }
        }

        return $type;
    }
}
