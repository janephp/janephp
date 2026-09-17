<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

trait PropertyGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    /**
     * The PHP Parser.
     */
    abstract protected function getParser(): Parser;

    protected function createProperty(Property $property, string $namespace, $default = null, bool $strict = true): Stmt
    {
        $propertyName = $property->getPhpName();
        $propertyStmt = new Stmt\PropertyProperty($propertyName);

        if (null === $default) {
            $default = $property->getDefault();
        }

        $nativeType = $this->getNativeType($property, $namespace, $strict);
        $default = $this->coerceDefault($default, $property->getType()->getTypeHint($namespace));

        if (\is_scalar($default) || (Type::TYPE_ARRAY === $property->getType()->getTypeHint($namespace)?->toString() && \is_array($default))) {
            $propertyStmt->default = $this->getDefaultAsExpr($default)->expr;
        }

        return new Stmt\Property(Modifiers::PUBLIC, [
            $propertyStmt,
        ], [
            'comments' => [$this->createPropertyDoc($property, $namespace, $strict, $default)],
        ], $nativeType);
    }

    /**
     * Decoded OpenAPI / JSON Schema defaults are raw JSON values: a numeric
     * string default on an integer, float or boolean property emits a default
     * literal whose PHP type does not match the declared one. PHP coerces such
     * assignments at runtime, so pre-coercing the emitted literal is purely a
     * statically-visible change (Mago invalid-property-default-value).
     */
    private function coerceDefault(mixed $default, Node\Identifier|Node\Name|null $typeHint): mixed
    {
        if (!\is_scalar($default) || !$typeHint instanceof Node\Identifier) {
            return $default;
        }

        // Only coerce when PHP would coerce at runtime too: casting a
        // non-numeric string to a numeric property would turn a TypeError
        // into a silently-accepted default.
        if (\in_array($typeHint->toString(), ['int', 'float'], true) && !is_numeric($default)) {
            return $default;
        }

        return match ($typeHint->toString()) {
            'int' => (int) $default,
            'float' => (float) $default,
            // PHP accepts any scalar default on a bool-typed property by
            // casting it, so a plain cast mirrors the runtime exactly
            // (filter_var would diverge on strings like 'off' or 'no').
            'bool' => (bool) $default,
            'string' => (string) $default,
            default => $default,
        };
    }

    private function getNativeType(Property $property, string $namespace, bool $strict): Node\ComplexType|Node\Identifier|Node\Name|null
    {
        $type = $property->getType()->getTypeHint($namespace);

        if (null !== $type && (!$strict || $property->isNullable())) {
            $type = new Node\NullableType($type);
        }

        return $type;
    }

    protected function createPropertyDoc(Property $property, $namespace, bool $strict, mixed $default = null): Doc
    {
        $docTypeHint = $property->getType()->getDocTypeHint($namespace);
        // A string-keyed default on a list-typed property documents a map, not
        // a list: degrading the top-level `list<` hint keeps the @var truthful
        // about the emitted default without changing the array type itself.
        if (\is_array($default) && $default !== [] && !array_is_list($default) && str_starts_with((string) $docTypeHint, 'list<')) {
            $docTypeHint = 'array<array-key, ' . substr((string) $docTypeHint, 5);
        }

        if ((!$strict || $property->isNullable()) && !str_contains($docTypeHint, 'null')) {
            $docTypeHint .= '|null';
        }

        $description = ['/**'];
        if ($property->getDescription()) {
            foreach (array_map(fn (string $line): string => str_replace('*/', '*\\/', rtrim($line)), explode("\n", $property->getDescription())) as $line) {
                $description[] = ' * ' . $line;
            }
            $description[] = ' *';
        }

        if ($property->isDeprecated()) {
            $description[] = ' * @deprecated';
            $description[] = ' *';
        }
        $description[] = \sprintf(' * @var %s', $docTypeHint);
        $description[] = ' */';

        return new Doc(implode("\n", $description));
    }

    private function getDefaultAsExpr($value): Stmt\Expression
    {
        /** @var Stmt\Expression $expression */
        $expression = $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];

        return $expression;
    }
}
