<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

/**
 * Resolves the "x-namespace" vendor extension into sanitized namespace segments.
 *
 * The attribute is opt-in per artifact: an operation annotated with "x-namespace"
 * moves its endpoint (and its inline request/response models) into that namespace,
 * while a schema annotated with "x-namespace" moves its model, normalizer and
 * validator there. Artifacts without the attribute keep the flat layout.
 *
 * The value may contain several segments separated by "\" or "/", e.g.
 * "Users\Admin" or "Users/Admin". Each segment is sanitized with the same rules
 * used for class names (invalid characters, reserved words, leading digits).
 */
class XNamespaceResolver
{
    public const ATTRIBUTE_NAME = 'x-namespace';

    private Naming $naming;

    public function __construct(?Naming $naming = null)
    {
        $this->naming = $naming ?? new Naming();
    }

    /**
     * Reads the extension from a parsed specification object. Parsed OpenAPI
     * models keep specification extensions (keys matching "^x-") in their
     * \ArrayObject storage, so anything else is reported as absent.
     *
     * @return string[] Sanitized namespace segments, empty when the attribute is absent or invalid
     */
    public function resolveFromObject(object $object): array
    {
        if (!$object instanceof \ArrayObject) {
            return [];
        }

        if (!isset($object[self::ATTRIBUTE_NAME]) || !\is_string($object[self::ATTRIBUTE_NAME])) {
            return [];
        }

        return $this->resolve($object[self::ATTRIBUTE_NAME]);
    }

    /**
     * @return string[] Sanitized namespace segments, empty when nothing usable remains
     */
    public function resolve(string $value): array
    {
        $parts = preg_split('#[\\\\/]+#', $value);
        if (false === $parts) {
            return [];
        }

        $segments = [];
        foreach ($parts as $part) {
            $segment = $this->naming->getClassName(trim($part));
            if ('' === $segment) {
                continue;
            }

            $segments[] = $segment;
        }

        return $segments;
    }

    /**
     * @return string "\"-prefixed sub-namespace (e.g. "\Users"), empty string when the class uses the flat layout
     */
    public static function subNamespaceSuffix(ClassGuess $classGuess): string
    {
        $subNamespace = $classGuess->getSubNamespace();

        return [] === $subNamespace ? '' : '\\' . implode('\\', $subNamespace);
    }

    /**
     * Applies the "x-namespace" declared on a parsed schema object to the class
     * guessed for it. Explicit attributes always win over inherited namespaces.
     */
    public function stampClassGuess(Registry $registry, string $reference, object $object): void
    {
        $subNamespace = $this->resolveFromObject($object);
        if ([] === $subNamespace) {
            return;
        }

        $classGuess = $registry->getClass($reference);
        if ($classGuess instanceof ClassGuess && [] === $classGuess->getSubNamespace()) {
            $classGuess->setSubNamespace($subNamespace);
        }
    }

    /**
     * Propagates an operation's sub-namespace to every model guessed from that
     * operation (inline request bodies / responses and their nested objects),
     * unless those declare their own "x-namespace".
     *
     * @param string[] $subNamespace
     */
    public function propagateToOperationModels(Schema $schema, OperationGuess $operationGuess, array $subNamespace): void
    {
        if ([] === $subNamespace) {
            return;
        }

        $operationReference = $operationGuess->getReference() . '/';
        foreach ($schema->getClasses() as $classGuess) {
            if ([] !== $classGuess->getSubNamespace()) {
                continue;
            }

            if (str_starts_with($classGuess->getReference(), $operationReference)) {
                $classGuess->setSubNamespace($subNamespace);
            }
        }
    }
}
