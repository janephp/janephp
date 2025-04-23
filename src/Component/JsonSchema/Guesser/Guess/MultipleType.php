<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
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
     * We have to place mixed normalization path at the last.
     *
     * @return array<Type>
     */
    protected function getTypesSorted(): array
    {
        $types = $this->getTypes();
        uasort($types, function ($first, $second) {
            /* @var Type $first */
            /* @var Type $second */
            if (($second instanceof ObjectType && 'Reference' === $second->getClassName()) || 'mixed' === $first->getName()) {
                return 1;
            }

            return 0;
        });

        return $types;
    }

    public function getDocTypeHint(string $namespace): string|Name|null
    {
        $stringTypes = array_map(function ($type) use ($namespace) {
            return $type->getDocTypeHint($namespace);
        }, $this->types);

        return implode('|', $stringTypes);
    }

    public function getTypeHint(string $namespace): Identifier|Name|null
    {
        if (1 === \count($this->types)) {
            $type = current($this->types);

            return $type->getTypeHint($namespace);
        }

        // We have exactly two types: one null and an object
        if (2 === \count($this->types)) {
            list($type1, $type2) = array_values($this->types);

            if ($this->isOptionalType($type1)) {
                return $type2->getTypeHint($namespace);
            }

            if ($this->isOptionalType($type2)) {
                return $type1->getTypeHint($namespace);
            }
        }

        return null;
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
        foreach ($this->getTypesSorted() as $discriminant => $type) {
            list($typeStatements, $typeOutput) = $type->createDenormalizationStatement($context, $input, $normalizerFromObject);

            $condition = $type->createConditionStatement($input);
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
            $statements[] = $ifStmt;
        }

        return [$statements, $output];
    }

    public function createNormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        $output = new Expr\Variable($context->getUniqueVariableName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        /** @var Stmt\If_|null $ifStmt */
        $ifStmt = null;
        foreach ($this->getTypesSorted() as $type) {
            list($typeStatements, $typeOutput) = $type->createNormalizationStatement($context, $input, $normalizerFromObject);

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
