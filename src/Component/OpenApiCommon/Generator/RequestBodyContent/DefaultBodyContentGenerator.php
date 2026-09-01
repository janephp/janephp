<?php

namespace Jane\Component\OpenApiCommon\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class DefaultBodyContentGenerator extends AbstractBodyContentGenerator
{
    public function __construct(DenormalizerInterface $denormalizer, string $schemaClass)
    {
        parent::__construct($denormalizer, $schemaClass);
    }

    public function getSerializeStatements($content, string $contentType, string $reference, Context $context): array
    {
        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
        ]))];
    }
}
