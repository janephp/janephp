<?php

namespace Jane\Component\OpenApiCommon\Guesser;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApiCommon\Registry\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GuessClass
{
    public function __construct(
        private readonly string $schemaClass,
        protected DenormalizerInterface $denormalizer,
    ) {
    }

    public function guessClass(&$schema, string $reference, Registry $registry, ?bool &$array = null): ?ClassGuess
    {
        $array = false;

        if ($schema instanceof Reference) {
            [$reference, $schema] = $this->resolve($schema, $this->schemaClass);
        }

        if ($schema instanceof $this->schemaClass) {
            $type = ($schema->type ?? null);

            if (\is_array($type) ? \in_array('array', $type, true) : 'array' === $type) {
                $array = true;
                $reference .= '/items';
                $items = ($schema->items ?? null);

                if ($items instanceof Reference) {
                    [$reference] = $this->resolve($items, $this->schemaClass);
                }
            }
        }

        return $registry->getClass($reference);
    }

    /**
     * Returns the collection shape a schema allows at its top level: 'array',
     * 'object', or null when the schema only allows plain scalars.
     *
     * The top-level `type` is checked first (as a string or as a type list,
     * issue #1166); when it allows no collection, each anyOf/oneOf branch is
     * resolved and inspected. References are resolved, so both inline and
     * referenced schemas work.
     */
    public function allowsCollection($schema): ?string
    {
        if ($schema instanceof Reference) {
            [, $schema] = $this->resolve($schema, $this->schemaClass);
        }

        if (!$schema instanceof $this->schemaClass) {
            return null;
        }

        $types = ($schema->type ?? null);

        if (\is_array($types)) {
            if (\in_array('array', $types, true)) {
                return 'array';
            }

            if (\in_array('object', $types, true)) {
                return 'object';
            }
        } elseif ('array' === $types) {
            return 'array';
        } elseif ('object' === $types) {
            return 'object';
        }

        foreach (['anyOf', 'oneOf'] as $keyword) {
            if (!property_exists($schema, $keyword)) {
                continue;
            }

            $branches = $schema->{$keyword} ?? null;

            if (!\is_array($branches)) {
                continue;
            }

            foreach ($branches as $branch) {
                $collection = $this->allowsCollection($branch);

                if (null !== $collection) {
                    return $collection;
                }
            }
        }

        return null;
    }

    /**
     * Collects the ClassGuess registered for each branch of a root-level anyOf/oneOf schema.
     *
     * Unlike allOf, anyOf/oneOf schemas have no ClassGuess registered at their own reference,
     * so guessClass() cannot resolve them. Branch classes are registered either at the branch
     * merged URI (for $ref branches) or at '<reference>/<keyword>/<index>' (for inline branches).
     *
     * This method never modifies $schema: pass the original (possibly unresolved) schema.
     *
     * @return ClassGuess[]
     */
    public function guessCompositeClasses($schema, string $reference, Registry $registry): array
    {
        if ($schema instanceof Reference) {
            [$reference, $schema] = $this->resolve($schema, $this->schemaClass);
        }

        if (!$schema instanceof $this->schemaClass) {
            return [];
        }

        $classGuesses = [];

        foreach (['anyOf', 'oneOf'] as $keyword) {
            if (!property_exists($schema, $keyword)) {
                continue;
            }

            $branches = $schema->{$keyword} ?? null;

            if (!\is_array($branches)) {
                continue;
            }

            foreach ($branches as $key => $branch) {
                if ($branch instanceof Reference) {
                    $branchReference = (string) $branch->getMergedUri();

                    if ($branchReference === (string) $branch->getMergedUri()->withFragment('')) {
                        $branchReference .= '#';
                    }

                    $classGuess = $registry->getClass($branchReference);
                } elseif ($branch instanceof $this->schemaClass) {
                    $classGuess = $registry->getClass($reference . '/' . $keyword . '/' . $key);
                } else {
                    continue;
                }

                if (null !== $classGuess) {
                    $classGuesses[] = $classGuess;
                }
            }
        }

        return $classGuesses;
    }

    public function resolve(Reference $reference, string $class): array
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
