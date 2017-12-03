<?php

namespace Jane\OpenApi\Generator;

use Jane\Generator\Context\Context;
use Jane\Runtime\Reference;
use Jane\Reference\Resolver;
use Jane\OpenApi\Model\Schema;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait OutputGeneratorTrait
{
    /**
     * @return DenormalizerInterface
     */
    abstract protected function getDenormalizer();

    /**
     * @param         $status
     * @param         $schema
     * @param Context $context
     *
     * @return [string, null|Stmt\If_]
     */
    protected function createResponseDenormalizationStatement($status, $schema, Context $context, $reference)
    {
        $jsonReference  = $reference;
        $array          = false;

        if ($schema instanceof Reference) {
            list($jsonReference, $schema) = $this->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && $schema->getType() == "array") {
            $array = true;
            $jsonReference .= '/items';

            if ($schema->getItems() instanceof Reference) {
                list($jsonReference, ) = $this->resolve($schema->getItems(), Schema::class);
            }
        }

        $class = $context->getRegistry()->getClass($jsonReference);

        // Happens when reference resolve to a none object
        if ($class === null) {
            $returnType = 'null';
            $returnStmt = new Stmt\Return_(new Expr\ConstFetch(new Name('null')));
        } else {
            $class = $context->getRegistry()->getSchema($jsonReference)->getNamespace() . "\\Model\\" . $class->getName();

            if ($array) {
                $class .= "[]";
            }

            $returnType = "\\" . $class;
            $returnStmt = new Stmt\Return_(new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'serializer'),
                'deserialize',
                [
                    new Arg(new Expr\Cast\String_(new Expr\MethodCall(new Expr\Variable('response'), 'getBody'))),
                    new Arg(new Scalar\String_($class)),
                    new Arg(new Scalar\String_('json'))
                ]
            ));
        }

        if ($status === 'default') {
            return [$returnType, $returnStmt];
        }

        return [$returnType, new Stmt\If_(
            new Expr\BinaryOp\Equal(
                new Scalar\String_($status),
                new Expr\MethodCall(new Expr\Variable('response'), 'getStatusCode')
            ),
            [
                'stmts' => [$returnStmt]
            ]
        )];
    }

    /**
     * @param Reference $reference
     * @param $class
     *
     * @return mixed
     */
    private function resolve(Reference $reference, $class)
    {
        $result    = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use($result, $class) {
                return $this->getDenormalizer()->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment('')
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
