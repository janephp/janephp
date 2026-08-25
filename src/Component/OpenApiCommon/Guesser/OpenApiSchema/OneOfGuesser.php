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
            && 'object' !== $object->getType()
            && \is_array($object->getOneOf())
            && \count($object->getOneOf()) > 0;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
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

        foreach ($object->getOneOf() as $oneOfKey => $oneOf) {
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
