<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class NullableTransformer implements TransformerInterface
{
    private $itemTransformer;
    private $isTargetNullable;

    public function __construct(TransformerInterface $itemTransformer, bool $isTargetNullable)
    {
        $this->itemTransformer = $itemTransformer;
        $this->isTargetNullable = $isTargetNullable;
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        [$output, $itemStatements] = $this->itemTransformer->transform($input, $uniqueVariableScope);

        $newOutput = null;
        $statements = [];

        if ($this->isTargetNullable) {
            $newOutput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
            $statements[] = new Stmt\Expression(new Expr\Assign($newOutput, new Expr\ConstFetch(new Name('null'))));
            $itemStatements[] = new Stmt\Expression(new Expr\Assign($newOutput, $output));
        }

        $statements[] = new Stmt\If_(new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $input), [
            'stmts' => $itemStatements,
        ]);

        return [$newOutput ?? $output, $statements];
    }

    public function getDependencies()
    {
        return $this->itemTransformer->getDependencies();
    }
}
