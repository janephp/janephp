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
            new Expr\Assign($valuesVar, new Expr\Array_()),
        ];

        $loopValueVar = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));

        [$output, $itemStatements] = $this->itemTransformer->transform($loopValueVar, $uniqueVariableScope);

        $loopStatements = array_merge($itemStatements, [
            new Expr\Assign(new Expr\ArrayDimFetch($valuesVar), $output),
        ]);

        $statements[] = new Stmt\Foreach_($input, $loopValueVar, [
            'stmts' => $loopStatements,
        ]);

        return [$valuesVar, $statements];
    }
}