<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use PhpParser\Node\Param;
use PhpParser\PrettyPrinter\Standard;
use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Extractor\ReadAccessor;
use Jane\AutoMapper\Generator\UniqueVariableScope;
use Jane\AutoMapper\Transformer\TransformerInterface;

trait EvalTransformerTrait
{
    private function createTransformerFunction(TransformerInterface $transformer, PropertyMapping $propertyMapping = null): \Closure
    {
        if (null === $propertyMapping) {
            $propertyMapping = new PropertyMapping(
                new ReadAccessor(ReadAccessor::TYPE_PROPERTY, 'dummy'),
                null,
                null,
                $transformer,
                'dummy'
            );
        }

        $variableScope = new UniqueVariableScope();
        $inputName = $variableScope->getUniqueName('input');
        $inputExpr = new Expr\Variable($inputName);

        [$outputExpr, $stmts] = $transformer->transform($inputExpr, $propertyMapping, $variableScope);

        $stmts[] = new Stmt\Return_($outputExpr);

        $functionExpr = new Expr\Closure([
            'stmts' => $stmts,
            'params' => [new Param($inputExpr), new Param(new Expr\Variable('context'), new Expr\Array_())],
        ]);

        $printer = new Standard();
        $code = $printer->prettyPrint([new Stmt\Return_($functionExpr)]);

        return eval($code);
    }

    private function evalTransformer(TransformerInterface $transformer, $input, PropertyMapping $propertyMapping = null)
    {
        $function = $this->createTransformerFunction($transformer, $propertyMapping);

        return $function($input);
    }
}
