<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
abstract class AbstractArrayTransformer implements TransformerInterface, DependentTransformerInterface
{
    private $itemTransformer;

    public function __construct(TransformerInterface $itemTransformer)
    {
        $this->itemTransformer = $itemTransformer;
    }

    abstract protected function getAssignExpr(Expr $valuesVar, Expr $outputVar, Expr $loopKeyVar, bool $assignByRef): Expr;

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        $valuesVar = new Expr\Variable($uniqueVariableScope->getUniqueName('values'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($valuesVar, new Expr\Array_())),
        ];

        $loopValueVar = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $loopKeyVar = new Expr\Variable($uniqueVariableScope->getUniqueName('key'));

        $assignByRef = $this->itemTransformer instanceof AssignedByReferenceTransformerInterface ? $this->itemTransformer->assignByRef() : false;

        [$output, $itemStatements] = $this->itemTransformer->transform($loopValueVar, $target, $propertyMapping, $uniqueVariableScope);
        $itemStatements[] = new Stmt\Expression($this->getAssignExpr($valuesVar, $output, $loopKeyVar, $assignByRef));

        $statements[] = new Stmt\Foreach_($input, $loopValueVar, [
            'stmts' => $itemStatements,
            'keyVar' => $loopKeyVar,
        ]);

        return [$valuesVar, $statements];
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        if (!$this->itemTransformer instanceof DependentTransformerInterface) {
            return [];
        }

        return $this->itemTransformer->getDependencies();
    }
}
