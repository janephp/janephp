<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

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
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Symfony\Component\Serializer\SerializerInterface;

class AnyOfReferencefGuesser implements ChainGuesserAwareInterface, GuesserInterface, TypeGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    protected $schemaClass;
    protected $naming;

    public function __construct(SerializerInterface $serializer, Naming $naming, string $schemaClass)
    {
        $this->serializer = $serializer;
        $this->schemaClass = $schemaClass;
        $this->naming = $naming;
    }

    public function supportObject($object): bool
    {
        return $object instanceof Schema && \is_array($object->getAnyOf()) && $object->getAnyOf()[0] instanceof Reference;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        if ($object instanceof Schema) {
            $mapping = null;
            $supportsDiscriminator = false;
            if ($object->getDiscriminator() && $object->getDiscriminator()->getPropertyName()) {
                $supportsDiscriminator = true;
                $type->setDiscriminatorProperty($object->getDiscriminator()->getPropertyName());
                if ($object->getDiscriminator()->getMapping()) {
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
                if (null !== $anyOfSchema->getType()) {
                    $anyOfType = $this->chainGuesser->guessType($anyOfSchema, $name, $anyOfReference, $registry);
                    if ($supportsDiscriminator) {
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
