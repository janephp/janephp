<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use Jane\Component\JsonSchema\Guesser\Guess\ArrayType;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\NonObjectGuessInterface;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;

/**
 * Collects the normalizers of models belonging to other schemas (namespaces) that are
 * transitively used by the models of a given schema.
 *
 * A generated JaneObjectNormalizer only knows how to handle the models of its own schema.
 * When a model references a model from another mapped schema, the generated normalizers
 * delegate that property to the Symfony serializer at runtime. Without a mapping entry
 * pointing to the foreign model's normalizer, no supporting normalizer can be found.
 */
class ExternalNormalizersResolver
{
    /**
     * @return array<string, string> Model FQCN => normalizer FQCN, sorted by model FQCN
     */
    public function resolve(Schema $schema, Registry $registry): array
    {
        $owners = [];

        foreach ($registry->getSchemas() as $registeredSchema) {
            foreach ($registeredSchema->getClasses() as $class) {
                if ($class instanceof NonObjectGuessInterface) {
                    continue;
                }

                $owners[$this->getModelFqcn($registeredSchema, $class)] = [$registeredSchema, $class];
            }
        }

        $mappings = [];
        $visited = [];
        $queue = [];

        foreach ($schema->getClasses() as $class) {
            if ($class instanceof NonObjectGuessInterface) {
                continue;
            }

            $modelFqcn = $this->getModelFqcn($schema, $class);

            if (!isset($visited[$modelFqcn])) {
                $visited[$modelFqcn] = true;
                $queue[] = $modelFqcn;
            }
        }

        while ([] !== $queue) {
            $modelFqcn = array_shift($queue);

            if (!isset($owners[$modelFqcn])) {
                continue;
            }

            /** @var ClassGuess $ownerClass */
            [$ownerSchema, $ownerClass] = $owners[$modelFqcn];

            foreach ($ownerClass->getProperties() as $property) {
                foreach ($this->getObjectTypes($property->getType()) as $objectType) {
                    $dependencyFqcn = ltrim($objectType->getFqdn(false), '\\');

                    if (!isset($owners[$dependencyFqcn]) || isset($visited[$dependencyFqcn])) {
                        continue;
                    }

                    $visited[$dependencyFqcn] = true;
                    $queue[] = $dependencyFqcn;

                    /** @var Schema $dependencySchema */
                    [$dependencySchema, $dependencyClass] = $owners[$dependencyFqcn];

                    if ($dependencySchema !== $schema) {
                        $subNamespace = $this->getSubNamespaceSuffix($dependencyClass);
                        $mappings[$dependencyFqcn] = \sprintf(
                            '%s\\Normalizer%s\\%sNormalizer',
                            $dependencySchema->getNamespace(),
                            $subNamespace,
                            $dependencyClass->getName()
                        );
                    }
                }
            }
        }

        ksort($mappings);

        return $mappings;
    }

    /**
     * @return array<ObjectType>
     */
    private function getObjectTypes(Type $type): array
    {
        if ($type instanceof ObjectType) {
            return [$type];
        }

        if ($type instanceof ArrayType) {
            return $this->getObjectTypes($type->getItemType());
        }

        if ($type instanceof MultipleType) {
            $objectTypes = [];

            foreach ($type->getTypes() as $subType) {
                foreach ($this->getObjectTypes($subType) as $objectType) {
                    $objectTypes[] = $objectType;
                }
            }

            return $objectTypes;
        }

        return [];
    }

    private function getModelFqcn(Schema $schema, ClassGuess $class): string
    {
        return \sprintf(
            '%s\\Model%s\\%s',
            $schema->getNamespace(),
            $this->getSubNamespaceSuffix($class),
            $class->getName()
        );
    }

    /**
     * @return string "\"-prefixed sub-namespace (e.g. "\Users"), empty string when the class uses the flat layout
     */
    private function getSubNamespaceSuffix(ClassGuess $class): string
    {
        $subNamespace = $class->getSubNamespace();

        return [] === $subNamespace ? '' : '\\' . implode('\\', $subNamespace);
    }
}
