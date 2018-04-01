<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\TransformerInterface;
use Jane\AutoMapper\Mapper;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;

class Compiler
{
    private $propertyInfoExtractor;

    private $transformerFactory;

    private $accessorExtractor;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactory $transformerFactory)
    {
        $this->propertyInfoExtractor = $propertyInfoExtractor;
        $this->accessorExtractor = $accessorExtractor;
        $this->transformerFactory = $transformerFactory;
    }

    public function getMapping($source, $target, array $options = [])
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source, $options);
        $targetProperties = $this->propertyInfoExtractor->getProperties($target, $options);

        if (null === $sourceProperties || null === $targetProperties) {
            throw new \RuntimeException('Cannot find properties to map');
        }

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($source, $property, $options)) {
                continue;
            }

            if (\in_array($property, $targetProperties)) {
                if (!$this->propertyInfoExtractor->isWritable($target, $property, $options)) {
                    continue;
                }

                $sourceTypes = $this->propertyInfoExtractor->getTypes($source, $property, $options);
                $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property, $options);
                $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes);

                if (null === $transformer) {
                    continue;
                }

                $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
                $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property);

                $mapping[] = [
                    'sourceAccessor' => $sourceAccessor,
                    'targetMutator' => $targetMutator,
                    'transformer' => $transformer,
                ];
            }
        }

        // @TODO Allow custom mapping

        if (\count($mapping) === 0) {
            throw new \RuntimeException('No properties matched');
        }

        $uniqueVariableScope = new UniqueVariableScope();
        $sourceInput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $result = new Expr\Variable($uniqueVariableScope->getUniqueName('result'));
        $statements = [
            new Expr\Assign($result, new Expr\New_(new Name($target))),
        ];

        foreach ($mapping as $propertyMapping) {
            /** @var TransformerInterface $transformer */
            $transformer = $propertyMapping['transformer'];
            $sourceAccessor = $propertyMapping['sourceAccessor'];
            $targetMutator = $propertyMapping['targetMutator'];

            [$output, $propStatements] = $transformer->transform($sourceAccessor->getExpression($sourceInput), $uniqueVariableScope);
            $propStatements[] = $targetMutator->getExpression($result, $output);

            $statements = array_merge(
                $statements,
                $propStatements
            );
        }

        $statements[] = new Stmt\Return_($result);

        $method = new Stmt\ClassMethod('map', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param($sourceInput->name),
                new Param('options', new Expr\Array_(), 'array'),
            ],
            'stmts' => $statements,
        ]);

        return new Stmt\Class_(new Name('Mapper'), [
            'flags' => Stmt\Class_::MODIFIER_FINAL,
            'extends' => new Name\FullyQualified(Mapper::class),
            'stmts' => [$method],
        ]);
    }
}
