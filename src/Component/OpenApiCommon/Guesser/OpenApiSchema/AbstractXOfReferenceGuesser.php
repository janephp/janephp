<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

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
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Shared guessing logic for schemas whose anyOf / oneOf branches are driven by
 * element references, parameterized by the OpenAPI version schema class and by
 * small behavioral hooks:
 *
 * - the union keyword (anyOf vs oneOf) selects the accessor
 * - OpenAPI 3.1 also considers allOf-wrapped references in supportObject and
 *   richer "has content" detection
 *
 * Version-local subclasses wire the version-specific behavior; the historical
 * mis-spelled class names (AnyOfReferencefGuesser / OneOfReferencefGuesser)
 * are removed in the 8.x major.
 */
abstract class AbstractXOfReferenceGuesser implements ChainGuesserAwareInterface, ClassGuesserInterface, GuesserInterface, TypeGuesserInterface
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

    /**
     * The union keyword this guesser drives ("anyOf" or "oneOf").
     */
    abstract protected function getUnionName(): string;

    /**
     * Whether the guesser participates in class guessing (recursing into union
     * branches). OpenAPI 3.1's oneOf guesser intentionally only guesses types.
     */
    protected function guessesElementClasses(): bool
    {
        return true;
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!$this->guessesElementClasses()) {
            return;
        }

        $union = $this->getUnionElements($object);
        if (null === $union) {
            return;
        }

        $unionName = $this->getUnionName();
        foreach ($union as $key => $element) {
            $this->chainGuesser->guessClass($element, $name . 'AnyOf', $reference . '/' . $unionName . '/' . $key, $registry);
        }
    }

    /**
     * Whether anyOf/oneOf elements wrapped in an allOf also count as references.
     */
    protected function supportsWrappedReferences(): bool
    {
        return false;
    }

    /**
     * Whether a leading non-reference element disqualifies the object.
     *
     * OpenAPI 3.0 declares support for any schema carrying a non-empty anyOf
     * (inline element objects included); OpenAPI 3.1 only reacts to reference
     * driven unions (plain or allOf-wrapped).
     */
    protected function requiresReferenceElement(): bool
    {
        return true;
    }

    /**
     * Whether a resolved union branch carries denormalizable content.
     */
    protected function hasUnionContent($schema): bool
    {
        return null !== ($schema->type ?? null);
    }

    public function supportObject($object): bool
    {
        $union = $this->getUnionElements($object);
        if (null === $union || 0 === \count($union)) {
            return false;
        }

        if ($union[0] instanceof Reference) {
            return true;
        }

        if (!$this->requiresReferenceElement()) {
            return true;
        }

        if (!$this->supportsWrappedReferences()) {
            return false;
        }

        foreach ($union as $element) {
            if (!$element instanceof $this->schemaClass || !\is_array($element->allOf ?? null)) {
                continue;
            }
            foreach (($element->allOf ?? []) as $allOf) {
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
        $union = $this->getUnionElements($object);
        if (null === $union) {
            return $type;
        }

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

        $unionName = $this->getUnionName();
        foreach ($union as $index => $element) {
            if (null === $element) {
                continue;
            }
            $resolved = $element;
            $elementReference = $reference . '/' . $unionName . '/' . $index;

            if ($element instanceof Reference) {
                $elementReference = (string) $element->getMergedUri();

                if ((string) $element->getMergedUri() === (string) $element->getMergedUri()->withFragment('')) {
                    $elementReference .= '#';
                }

                $resolved = $this->resolve($element, $this->schemaClass);
            }

            if ($this->hasUnionContent($resolved)) {
                $elementType = $this->chainGuesser->guessType($resolved, $name, $elementReference, $registry);
                if ($supportsDiscriminator && $element instanceof Reference) {
                    $objectRef = '#' . $element->getMergedUri()->getFragment();
                    $type->addType($elementType, null !== $mapping ? ($mapping[$objectRef] ?? $objectRef) : $objectRef);
                } else {
                    $type->addType($elementType);
                }
            }
        }

        return $type;
    }

    /**
     * @return mixed[]|null the union elements of the object, or null when the
     *                      schema does not carry the union keyword
     */
    abstract protected function getUnionElements($object): ?array;
}
