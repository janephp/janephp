<?php

namespace Jane\Component\OpenApi2\Generator\Endpoint;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\Response;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\ExceptionGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OpenApiNumberTypeResolverTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use Jane\Component\OpenApiCommon\Registry\Registry;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\SerializerInterface;

trait GetTransformResponseBodyTrait
{
    use OpenApiNumberTypeResolverTrait;

    public function getTransformResponseBody(OperationGuess $operation, string $endpointName, GuessClass $guessClass, ExceptionGenerator $exceptionGenerator, Context $context): array
    {
        $outputStatements = [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('status'), new Expr\MethodCall(new Expr\Variable('response'), 'getStatusCode'))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('body'), new Expr\Cast\String_(new Expr\MethodCall(new Expr\Variable('response'), 'getBody')))),
        ];

        /** @var Registry $registry */
        $registry = $context->getRegistry();
        $outputTypes = $registry->getThrowUnexpectedStatusCode() ? [] : ['null'];
        $throwTypes = [];

        if ($operation->getOperation()->getResponses()) {
            foreach ($operation->getOperation()->getResponses() as $status => $response) {
                $reference = $operation->getReference() . '/responses/' . $status;

                if ($response instanceof Reference) {
                    [$reference, $response] = $guessClass->resolve($response, Response::class);
                }

                /* @var Response $response */
                [$outputType, $throwType, $ifStatus] = $this->createResponseDenormalizationStatement(
                    $endpointName,
                    $status,
                    $response->getSchema(),
                    $context,
                    $reference,
                    $response->getDescription()
                );

                if (null !== $outputType || null !== $throwType) {
                    if (null !== $outputType && !\in_array($outputType, $outputTypes, true)) {
                        $outputTypes[] = $outputType;
                    }

                    if (null !== $throwType && !\in_array($throwType, $throwTypes, true)) {
                        $throwTypes[] = $throwType;
                    }

                    $outputStatements[] = $ifStatus;
                }
            }
        }

        if ($registry->getThrowUnexpectedStatusCode()) {
            $exceptionGenerator->createBaseExceptions($context);

            $throwType = '\\' . $context->getCurrentSchema()->getNamespace() . '\\Exception\\BadResponseException';
            $throwTypes[] = $throwType;
            $outputStatements = array_merge(
                $outputStatements,
                [
                    new Stmt\Expression(new Expr\Throw_(
                        new Expr\New_(
                            new Name($throwType),
                            [
                                new Arg(new Expr\Variable('status')),
                                new Arg(new Expr\Variable('body')),
                                new Arg(new Expr\Variable('response')),
                            ]
                        )
                    )),
                ]
            );
        }

        $returnDoc = implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $outputTypes);

        return [new Stmt\ClassMethod('transformResponseBody', [
            'flags' => Modifiers::PROTECTED,
            'params' => [
                new Node\Param(new Expr\Variable('response'), null, new Name('\\Psr\\Http\\Message\\ResponseInterface')),
                new Node\Param(new Expr\Variable('serializer'), null, new Name\FullyQualified(SerializerInterface::class)),
                new Node\Param(new Expr\Variable('contentType'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name('string'))),
            ],
            'stmts' => $outputStatements,
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * {@inheritdoc}
 *

EOD
                . $returnDoc . "\n"
                . ' */'
            ),
            ], ]), $outputTypes, $throwTypes];
    }

    private function createResponseDenormalizationStatement(string $name, string $status, $schema, Context $context, string $reference, string $description)
    {
        $array = false;
        $classGuess = $this->guessClass->guessClass($schema, $reference, $context->getRegistry(), $array);
        $returnType = 'null';
        $throwType = null;
        $serializeStmt = new Expr\ConstFetch(new Name('null'));
        $class = null;

        if (null !== $classGuess) {
            $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model' . XNamespaceResolver::subNamespaceSuffix($classGuess) . '\\' . $classGuess->getName();

            if ($array) {
                $class .= '[]';
            }

            $returnType = '\\' . $class;
            $serializeStmt = new Expr\MethodCall(
                new Expr\Variable('serializer'),
                'deserialize',
                [
                    new Arg(new Expr\Variable('body')),
                    new Arg(new Scalar\String_($class)),
                    new Arg(new Scalar\String_('json')),
                ]
            );
        } elseif ($schema instanceof Schema) {
            $serializeStmt = new Expr\FuncCall(new Name('json_decode'), [
                new Arg(new Expr\Variable('body')),
            ]);

            $scalarReturnType = $this->convertResponseType($schema);

            if (null !== $scalarReturnType) {
                $returnType = $scalarReturnType;
            }
        }

        $returnStmt = new Stmt\Return_($serializeStmt);

        /** @var Registry $registry */
        $registry = $context->getRegistry();
        if ((int) $status >= 400 && $registry->getGenerateErrorExceptions()) {
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
            $returnStmt = new Stmt\Expression(new Expr\Throw_(new Expr\New_(new Name($throwType), $classGuess ? [
                new Arg($serializeStmt), new Arg(new Expr\Variable('response')),
            ] : [new Arg(new Expr\Variable('response'))])));
        }

        if ('default' === $status) {
            return [$returnType, $throwType, $returnStmt];
        }

        return [$returnType, $throwType, new Stmt\If_(
            new Expr\BinaryOp\Identical(
                new Scalar\LNumber((int) $status),
                new Expr\Variable('status')
            ),
            [
                'stmts' => [$returnStmt],
            ]
        )];
    }

    private function convertResponseType(Schema $schema): ?string
    {
        $type = $schema->getType();

        if (null === $type && null !== $schema->getEnum() && \count($schema->getEnum()) > 0) {
            $type = 'string';
        }

        return match ($type) {
            'string' => 'string',
            'number' => $this->isNumberFloat(
                $schema->getFormat(),
                $schema->getDefault(),
                $schema->getMinimum(),
                $schema->getMaximum(),
                $schema->getMultipleOf(),
                $schema->getEnum()
            ) ? 'float' : 'int',
            'boolean' => 'bool',
            'integer' => 'int',
            'array' => 'array',
            default => null,
        };
    }
}
