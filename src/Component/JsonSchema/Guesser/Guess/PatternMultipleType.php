<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class PatternMultipleType extends Type
{
    protected $types = [];

    public function __construct(object $object, array $types = [])
    {
        parent::__construct($object, 'mixed');

        $this->types = $types;
    }

    /**
     * Add a type.
     */
    public function addType(string $pattern, Type $type): self
    {
        $this->types[$pattern] = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDocTypeHint(string $namespace)
    {
        $stringTypes = array_map(function ($type) use ($namespace) {
            return $type->getDocTypeHint($namespace) . '[]';
        }, $this->types);

        return implode('|', $stringTypes);
    }

    /**
     * ({@inheritDoc}.
     */
    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        $valuesVar = new Expr\Variable($context->getUniqueVariableName('values'));
        $statements = [
            // $values = [];
            new Stmt\Expression(new Expr\Assign($valuesVar, $this->createArrayValueStatement())),
        ];

        $loopValueVar = new Expr\Variable($context->getUniqueVariableName('value'));
        $loopKeyVar = $this->createLoopKeyStatement($context);
        $loopStatements = [];

        foreach ($this->types as $pattern => $type) {
            [$typeStatements, $typeOutput] = $type->createDenormalizationStatement($context, $loopValueVar, $normalizerFromObject);
            $loopStatements = array_merge($loopStatements, [
                new Stmt\If_(
                    new Expr\BinaryOp\BooleanAnd(
                        new Expr\FuncCall(new Name('preg_match'), [
                            new Arg(new Expr\ConstFetch(new Name("'/" . str_replace('/', '\/', $pattern) . "/'"))),
                            new Arg(new Expr\Cast\String_($loopKeyVar)),
                        ]),
                        $type->createConditionStatement($loopValueVar)
                    ),
                    [
                        'stmts' => array_merge($typeStatements, [
                            new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($valuesVar, $loopKeyVar), $typeOutput)),
                            new Stmt\Continue_(),
                        ]),
                    ]
                ),
            ]);
        }

        $statements[] = new Stmt\Foreach_($input, $loopValueVar, [
            'keyVar' => $loopKeyVar,
            'stmts' => $loopStatements,
        ]);

        return [$statements, $valuesVar];
    }

    /**
     * ({@inheritDoc}.
     */
    public function createNormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        $valuesVar = new Expr\Variable($context->getUniqueVariableName('values'));
        $statements = [
            // $values = [];
            new Stmt\Expression(new Expr\Assign($valuesVar, $this->createNormalizationArrayValueStatement())),
        ];

        $loopValueVar = new Expr\Variable($context->getUniqueVariableName('value'));
        $loopKeyVar = $this->createLoopKeyStatement($context);
        $loopStatements = [];

        foreach ($this->types as $pattern => $type) {
            [$typeStatements, $typeOutput] = $type->createNormalizationStatement($context, $loopValueVar, $normalizerFromObject);
            $loopStatements = array_merge($loopStatements, [
                new Stmt\If_(
                    new Expr\BinaryOp\BooleanAnd(
                        new Expr\FuncCall(new Name('preg_match'), [
                            new Arg(new Expr\ConstFetch(new Name("'/" . str_replace('/', '\/', $pattern) . "/'"))),
                            new Arg(new Expr\Cast\String_($loopKeyVar)),
                        ]),
                        $type->createNormalizationConditionStatement($loopValueVar)
                    ),
                    [
                        'stmts' => array_merge($typeStatements, [
                            new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($valuesVar, $loopKeyVar), $typeOutput)),
                            new Stmt\Continue_(),
                        ]),
                    ]
                ),
            ]);
        }

        $statements[] = new Stmt\Foreach_($input, $loopValueVar, [
            'keyVar' => $loopKeyVar,
            'stmts' => $loopStatements,
        ]);

        return [$statements, $valuesVar];
    }

    /**
     * {@inheritdoc}
     */
    protected function createArrayValueStatement(): Expr
    {
        return new Expr\New_(new Name('\ArrayObject'), [
            new Expr\Array_(),
            new Expr\ClassConstFetch(new Name('\ArrayObject'), 'ARRAY_AS_PROPS'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function createNormalizationArrayValueStatement(): Expr
    {
        return new Expr\Array_();
    }

    /**
     * {@inheritdoc}
     */
    protected function createLoopKeyStatement(Context $context): Expr
    {
        return new Expr\Variable($context->getUniqueVariableName('key'));
    }
}
