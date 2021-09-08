<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Extractor\WriteMutator;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
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

        if ($propertyMapping->getWriteMutator() && $propertyMapping->getWriteMutator()->getType() === WriteMutator::TYPE_ADDER_AND_REMOVER) {
            $mappedValueVar = new Expr\Variable($uniqueVariableScope->getUniqueName('mappedValue'));
            $itemStatements[] = new Stmt\Expression(new Expr\Assign($mappedValueVar, $output));
            $itemStatements[] = new Stmt\If_(new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $mappedValueVar), [
                'stmts' => [
                    new Stmt\Expression($propertyMapping->getWriteMutator()->getExpression($target, $mappedValueVar, $assignByRef)),
                ],
            ]);
        } else {
            $itemStatements[] = new Stmt\Expression($this->getAssignExpr($valuesVar, $output, $loopKeyVar, $assignByRef));
        }

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
