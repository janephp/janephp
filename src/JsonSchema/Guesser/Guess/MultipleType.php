<?php

namespace Jane\JsonSchema\Guesser\Guess;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

class MultipleType extends Type
{
    protected $types;

    public function __construct($object, array $types = [])
    {
        parent::__construct($object, 'mixed');

        $this->types = $types;
    }

    /**
     * Add a type.
     *
     * @param Type $type
     *
     * @return $this
     */
    public function addType(Type $type)
    {
        if ($type instanceof self) {
            foreach ($type->getTypes() as $subType) {
                $this->types[] = $subType;
            }

            return $this;
        }

        $this->types[] = $type;

        return $this;
    }

    /**
     * Return a list of types.
     *
     * @return Type[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * We have to place mixed normalization path at the last.
     *
     * @return Type[]
     */
    protected function getTypesSorted()
    {
        $types = $this->getTypes();
        usort($types, function ($first, $second) {
            /* @var Type $first */
            /* @var Type $second */
            if (($second instanceof ObjectType && 'Reference' === $second->getClassName()) || 'mixed' === $first->getName()) {
                return 1;
            }

            return 0;
        });

        return $types;
    }

    /**
     * {@inheritdoc}
     */
    public function getDocTypeHint($namespace)
    {
        $stringTypes = array_map(function ($type) use ($namespace) {
            return $type->getDocTypeHint($namespace);
        }, $this->types);

        return implode('|', $stringTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeHint($namespace)
    {
        // We have exactly two types: one null and an object
        if (2 === \count($this->types)) {
            list($type1, $type2) = $this->types;

            if ($this->isOptionalType($type1)) {
                return $type2->getTypeHint($namespace);
            }

            if ($this->isOptionalType($type2)) {
                return $type1->getTypeHint($namespace);
            }
        }

        return null;
    }

    private function isOptionalType(Type $nullType)
    {
        return 'null' === $nullType->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        $output = new Expr\Variable($context->getUniqueVariableName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        /** @var Stmt\If_|null $ifStmt */
        $ifStmt = null;
        foreach ($this->getTypesSorted() as $type) {
            list($typeStatements, $typeOutput) = $type->createDenormalizationStatement($context, $input, $normalizerFromObject);

            $condition = $type->createConditionStatement($input);
            $statement = array_merge($typeStatements, [new Stmt\Expression(new Expr\Assign($output, $typeOutput))]);

            if ($ifStmt === null) {
                $ifStmt = new Stmt\If_($condition, ['stmts' => $statement]);
            } else {
                $ifStmt->elseifs[] = new Stmt\ElseIf_($condition, $statement);
            }
        }
        $statements[] = $ifStmt;

        return [$statements, $output];
    }

    /**
     * {@inheritdoc}
     */
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
        $statements[] = $ifStmt;

        return [$statements, $output];
    }
}
