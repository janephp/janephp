<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class MultipleType extends Type
{
    /**
     * @param array<Type> $types
     */
    public function __construct(
        object $object,
        protected array $types = [],
        protected ?string $discriminatorProperty = null,
    ) {
        parent::__construct($object, 'mixed');
    }

    /**
     * Sets discriminator property.
     */
    public function setDiscriminatorProperty(string $property): self
    {
        $this->discriminatorProperty = $property;

        return $this;
    }

    /**
     * Add a type.
     */
    public function addType(Type $type, $discriminant = null): self
    {
        if ($type instanceof self) {
            foreach ($type->getTypes() as $subType) {
                $this->types[] = $subType;
            }

            return $this;
        }

        if ($discriminant !== null) {
            $this->types[$discriminant] = $type;
        } else {
            $this->types[] = $type;
        }

        return $this;
    }

    /**
     * Return a list of types.
     *
     * @return array<Type>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * Emit branches from the most specific condition to the most generic one:
     * an array branch's condition (is_input && numeric keys) is a strict
     * subset of the object branches' condition, so it must come first or it
     * is statically unreachable (Mago paradoxical-condition). We have to
     * place mixed normalization path at the last.
     *
     * @return array<Type>
     */
    protected function getTypesSorted(): array
    {
        $types = $this->getTypes();
        $specificity = static function (Type $type): int {
            /* @var Type $type */
            if ($type instanceof ArrayType) {
                return 0;
            }

            if ('mixed' === $type->getName() || ($type instanceof ObjectType && 'Reference' === $type->getClassName())) {
                return 2;
            }

            return 1;
        };
        // uasort keeps the original (possibly discriminator) keys attached to
        // each type, and is stable on ties since PHP 8.0.
        uasort($types, static function (Type $first, Type $second) use ($specificity): int {
            return $specificity($first) <=> $specificity($second);
        });

        return $types;
    }

    public function getDocTypeHint(string $namespace): string|Name|null
    {
        // An enum keeping unknown values documents its backing type once, after all branches.
        $unknownValueTypes = [];
        $stringTypes = array_map(static function ($type) use ($namespace, &$unknownValueTypes) {
            if ($type instanceof EnumType && null !== $type->getUnknownValueType()) {
                $unknownValueTypes[] = $type->getUnknownValueType();

                return $type->getTypeHint($namespace);
            }

            return $type->getDocTypeHint($namespace);
        }, $this->types);

        // A branch of the union without any usable type to document (e.g. an
        // empty `{}` sub-schema guessed as an unnamed Type) would otherwise
        // emit a malformed `@var ` tag: document it as `mixed` instead.
        $stringTypes = array_map(
            static fn (string|Name|null $typeHint): string|Name|null => null === $typeHint || '' === (string) $typeHint ? 'mixed' : $typeHint,
            $stringTypes
        );

        $stringTypes = array_map(static fn ($stringType): string => (string) $stringType, $stringTypes);

        // An empty usable-type union (every branch stripped by the guesser...
        // or resolved to nothing documentable) must not emit a malformed
        // empty `@var ` tag.
        $stringTypes = array_unique([...$stringTypes, ...$unknownValueTypes]);
        if ([] !== $unknownValueTypes && \in_array(Type::TYPE_NULL, $stringTypes, true)) {
            $stringTypes = [...array_diff($stringTypes, [Type::TYPE_NULL]), Type::TYPE_NULL];
        }

        $imploded = implode('|', $stringTypes);

        return '' === $imploded ? 'mixed' : $imploded;
    }

    public function getTypeHint(string $namespace): Identifier|Name|null
    {
        return $this->getNonNullType()?->getTypeHint($namespace);
    }

    public function getNativeTypeHint(string $namespace, bool $nullable): Node\ComplexType|Identifier|Name|null
    {
        return $this->getNonNullType()?->getNativeTypeHint($namespace, $nullable);
    }

    /**
     * Tell whether denormalizing any branch can produce null.
     */
    public function canBeNull(): bool
    {
        foreach ($this->types as $type) {
            if ($type->canBeNull()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return the only branch of the union, or its only branch besides null.
     */
    private function getNonNullType(): ?Type
    {
        if (1 === \count($this->types)) {
            return current($this->types);
        }

        // We have exactly two types: one null and an object
        if (2 === \count($this->types)) {
            list($type1, $type2) = array_values($this->types);

            if ($this->isOptionalType($type1)) {
                return $type2;
            }

            if ($this->isOptionalType($type2)) {
                return $type1;
            }
        }

        return null;
    }

    /**
     * @param array<array-key, Type> $types
     */
    private function hasLaterEnumWithBackingType(array $types, EnumType $enumType): bool
    {
        $after = false;
        foreach ($types as $type) {
            if ($type === $enumType) {
                $after = true;
            } elseif ($after && $type instanceof EnumType && $type->getName() === $enumType->getName()) {
                return true;
            }
        }

        return false;
    }

    private function isOptionalType(Type $nullType): bool
    {
        return 'null' === $nullType->getName();
    }

    private function createDiscriminatorCondition(Expr $input, $discriminant): Expr
    {
        $issetCondition = new Expr\FuncCall(
            new Name('isset'),
            [
                new Arg(new Expr\ArrayDimFetch($input, new Scalar\String_($this->discriminatorProperty))),
            ]
        );

        $valueCondition = new Expr\BinaryOp\Equal(
            new Expr\ArrayDimFetch($input, new Scalar\String_($this->discriminatorProperty)),
            new Scalar\String_($discriminant)
        );

        return new Expr\BinaryOp\LogicalAnd($issetCondition, $valueCondition);
    }

    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        $output = new Expr\Variable($context->getUniqueVariableName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        /** @var Stmt\If_|null $ifStmt */
        $ifStmt = null;
        $types = $this->getTypesSorted();
        foreach ($types as $discriminant => $type) {
            if ($type instanceof EnumType) {
                $typeStatements = [];
                $typeOutput = $type->createUnionBranchValueStatement($input);
                $condition = $type->createUnionBranchConditionStatement($input, $this->hasLaterEnumWithBackingType($types, $type));
            } else {
                list($typeStatements, $typeOutput) = $type->createDenormalizationStatement($context, $input, $normalizerFromObject);
                $condition = $type->createConditionStatement($input);
            }

            if ($this->discriminatorProperty) {
                $condition = new Expr\BinaryOp\LogicalAnd($condition, $this->createDiscriminatorCondition($input, $discriminant));
            }
            $statement = array_merge($typeStatements, [new Stmt\Expression(new Expr\Assign($output, $typeOutput))]);

            if ($ifStmt === null) {
                $ifStmt = new Stmt\If_($condition, ['stmts' => $statement]);
            } else {
                $ifStmt->elseifs[] = new Stmt\ElseIf_($condition, $statement);
            }
        }

        if (null !== $ifStmt) {
            $this->appendDateFallbackStatements($context, $input, $output, $ifStmt);
            $statements[] = $ifStmt;
        }

        return [$statements, $output];
    }

    /**
     * A string that matches no branch would otherwise fall through as the raw
     * input and TypeError any typed setter (GH#1038). When one of the branches
     * is a date, append two guards: an empty string resolves to null when the
     * union explicitly admits null (a deliberate leniency — an empty string is
     * the common wire encoding of an absent date, and unlike the plain date
     * property path the union has declared that absence is a valid value), and
     * any other non-parsing string is reported with the same clean
     * InvalidDateException the plain date path throws since GH#764 / GH#752.
     */
    private function appendDateFallbackStatements(Context $context, Expr $input, Expr $output, Stmt\If_ $ifStmt): void
    {
        if (null !== $this->discriminatorProperty) {
            return;
        }

        $dateFormat = null;
        $hasNullBranch = false;

        foreach ($this->getTypesSorted() as $type) {
            if (null === $dateFormat && ($type instanceof DateTimeType || $type instanceof DateType) && !empty($type->getInputFormat())) {
                $dateFormat = $type->getInputFormat();
            }

            if ('null' === $type->getName()) {
                $hasNullBranch = true;
            }
        }

        if (null === $dateFormat) {
            return;
        }

        if ($hasNullBranch) {
            // elseif ('' === $input) { $output = null; }
            $ifStmt->elseifs[] = new Stmt\ElseIf_(
                new Expr\BinaryOp\Identical(new Scalar\String_(''), $input),
                [new Stmt\Expression(new Expr\Assign($output, new Expr\ConstFetch(new Name('null'))))]
            );
        }

        // elseif (is_string($input)) { throw new InvalidDateException($input, $format); }
        $ifStmt->elseifs[] = new Stmt\ElseIf_(
            new Expr\FuncCall(new Name('is_string'), [new Arg($input)]),
            [new Stmt\Expression(new Expr\Throw_(new Expr\New_(
                new Name\FullyQualified(\sprintf('%s\\Runtime\\Normalizer\\InvalidDateException', $context->getCurrentSchema()->getNamespace())),
                [
                    new Arg($input),
                    new Arg(new Scalar\String_($dateFormat)),
                ]
            )))]
        );
    }

    public function createNormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true, bool $inputMayBeNull = true): array
    {
        $output = new Expr\Variable($context->getUniqueVariableName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        /** @var Stmt\If_|null $ifStmt */
        $ifStmt = null;
        foreach ($this->getTypesSorted() as $type) {
            // Every branch condition (is_object(), is_string(), !is_null(), ...)
            // already guarantees a non-null input, so the branch statements are
            // emitted without their null-safety wrappers.
            list($typeStatements, $typeOutput) = $type->createNormalizationStatement($context, $input, $normalizerFromObject, false);

            $condition = $type->createNormalizationConditionStatement($input);
            $statement = array_merge($typeStatements, [new Stmt\Expression(new Expr\Assign($output, $typeOutput))]);

            if ($ifStmt === null) {
                $ifStmt = new Stmt\If_($condition, ['stmts' => $statement]);
            } else {
                $ifStmt->elseifs[] = new Stmt\ElseIf_($condition, $statement);
            }
        }

        if (null !== $ifStmt) {
            $statements[] = $ifStmt;
        }

        return [$statements, $output];
    }
}
