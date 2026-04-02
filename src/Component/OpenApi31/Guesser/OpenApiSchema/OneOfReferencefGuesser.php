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
        return $object instanceof JsonSchema
            && \is_array($object->getOneOf())
            && [] !== $object->getOneOf()
            && $object->getOneOf()[0] instanceof Reference;
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
                if (null !== $oneOfSchema->getType()) {
                    $oneOfType = $this->chainGuesser->guessType($oneOfSchema, $name, $oneOfReference, $registry);
                    if ($supportsDiscriminator && $oneOf instanceof Reference) {
                        $objectRef = '#' . $oneOf->getMergedUri()->getFragment();
                        $type->addType($oneOfType, $mapping ? $mapping[$objectRef] : $objectRef);
                    } else {
                        $type->addType($oneOfType);
                    }
                }
            }
        }

        return $type;
    }
}
