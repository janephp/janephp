<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

class ArrayTransformer implements TransformerInterface
{
    private $itemTransformer;

    public function __construct(TransformerInterface $itemTransformer)
    {
        $this->itemTransformer = $itemTransformer;
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        $valuesVar = new Expr\Variable($uniqueVariableScope->getUniqueName('values'));
        $statements = [
            // $values = [];
            new Stmt\Expression(new Expr\Assign($valuesVar, new Expr\Array_())),
        ];

        $loopValueVar = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));

        [$output, $itemStatements] = $this->itemTransformer->transform($loopValueVar, $uniqueVariableScope);

        if ($this->itemTransformer->assignByRef()) {
            $itemStatements[] = new Stmt\Expression(new Expr\AssignRef(new Expr\ArrayDimFetch($valuesVar), $output));
        } else {
            $itemStatements[] = new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch($valuesVar), $output));
        }

        $statements[] = new Stmt\Foreach_($input, $loopValueVar, [
            'stmts' => $itemStatements,
        ]);

        return [$valuesVar, $statements];
    }

    public function assignByRef(): bool
    {
        return false;
    }

    public function getDependencies()
    {
        return $this->itemTransformer->getDependencies();
    }
}
