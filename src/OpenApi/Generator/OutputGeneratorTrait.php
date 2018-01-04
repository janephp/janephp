<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
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

    abstract protected function getResponseToStringStatement($responseVariable): Expr;

    abstract protected function getResponseStatusStatement($responseVariable): Expr;

    protected function createResponseDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description)
    {
        $jsonReference = $reference;
        $array = false;

        if ($schema instanceof Reference) {
            list($jsonReference, $schema) = $this->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' == $schema->getType()) {
            $array = true;
            $jsonReference .= '/items';

            if ($schema->getItems() instanceof Reference) {
                list($jsonReference) = $this->resolve($schema->getItems(), Schema::class);
            }
        }

        $classGuess = $context->getRegistry()->getClass($jsonReference);
        $returnType = 'null';
        $throwType = null;
        $serializeStmt = new Expr\ConstFetch(new Name('null'));
        $class = null;

        if (null !== $classGuess) {
            $class = $context->getRegistry()->getSchema($jsonReference)->getNamespace() . '\\Model\\' . $classGuess->getName();
            $returnType = '\\' . $class;

            if ($array) {
                $class .= '[]';
            }

            $serializeStmt = new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'serializer'),
                'deserialize',
                [
                    new Arg($this->getResponseToStringStatement(new Expr\Variable('response'))),
                    new Arg(new Scalar\String_($class)),
                    new Arg(new Scalar\String_('json')),
                ]
            );
        } elseif ($schema instanceof Schema) {
            $serializeStmt = new Expr\FuncCall(new Name('json_decode'), [
                new Arg($this->getResponseToStringStatement(new Expr\Variable('response'))),
            ]);
        }

        $returnStmt = new Stmt\Return_($serializeStmt);

        if ((int) $status >= 400) {
            $exceptionName = $this->exceptionGenerator->generate(
                $name,
                (int) $status,
                $context,
                $classGuess,
                $array,
                $class,
                $description
            );

            $returnType = null;
            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\' . $exceptionName;
            $returnStmt = new Stmt\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                $serializeStmt,
            ] : []));
        }

        if ('default' === $status) {
            return [$returnType, $throwType, $returnStmt];
        }

        return [$returnType, $throwType, new Stmt\If_(
            new Expr\BinaryOp\Identical(
                new Scalar\LNumber((int) $status),
                $this->getResponseStatusStatement(new Expr\Variable('response'))
            ),
            [
                'stmts' => [$returnStmt],
            ]
        )];
    }

    protected function createException($status, $request)
    {
    }

    /**
     * @param Reference $reference
     * @param $class
     *
     * @return mixed
     */
    private function resolve(Reference $reference, $class)
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->getDenormalizer()->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
