<?php

namespace Jane\Component\OpenApiCommon\Generator\Client;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\JsonSchema\Registry\Schema as BaseSchema;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\HttpClientInterface;

trait ClientGenerator
{
    abstract protected function getHttpClientCreateExpr(Context $context): array;

    protected function getSuffix(): string
    {
        return '';
    }

    protected function createResourceClass(Schema $schema, string $name): Stmt\Class_
    {
        $naming = new Naming();

        return new Stmt\Class_($name, [
            'extends' => new Name\FullyQualified($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'Client')),
        ]);
    }

    protected function getFactoryMethod(BaseSchema $schema, Context $context): Stmt
    {
        $params = $this->getFactoryParams($context);

        return new Stmt\ClassMethod(
            'create', [
                'flags' => Modifiers::STATIC | Modifiers::PUBLIC,
                'params' => $params,
                'stmts' => [
                    ...$this->getHttpClientCreateExpr($context),
                    $this->createNormalizersStatement($context),
                    $this->createAdditionalNormalizersStatement(),
                    $this->createSerializerStatement($context),
                    $this->createReturnStatement(),
                ],
            ]
        );
    }

    /**
     * @return Node\Param[]
     */
    private function getFactoryParams(Context $context): array
    {
        $params = [
            new Node\Param(new Expr\Variable('httpClient'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name\FullyQualified(HttpClientInterface::class))),
            new Node\Param(new Expr\Variable('additionalPlugins'), new Expr\Array_(), new Node\Identifier('array')),
            new Node\Param(new Expr\Variable('additionalNormalizers'), new Expr\Array_(), new Node\Identifier('array')),
        ];

        if ($this->needsServerPlugins($context->getCurrentSchema()->getParsed())) {
            $params[] = new Node\Param(
                new Expr\Variable('applyServerPlugins'),
                new Expr\ConstFetch(new Name('true')),
                new Node\Identifier('bool')
            );
        }

        return $params;
    }

    private function createNormalizersStatement(Context $context): Stmt\Expression
    {
        return new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('normalizers'),
            new Expr\Array_([
                new Expr\ArrayItem(new Expr\New_(new Name('\\Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer'))),
                new Expr\ArrayItem(new Expr\New_(new Name('\\' . $context->getCurrentSchema()->getNamespace() . '\\Normalizer\\JaneObjectNormalizer'))),
            ])
        ));
    }

    private function createAdditionalNormalizersStatement(): Stmt\If_
    {
        return new Stmt\If_(
            new Expr\BinaryOp\Greater(
                new Expr\FuncCall(new Name('count'), [new Node\Arg(new Expr\Variable('additionalNormalizers'))]),
                new Expr\ConstFetch(new Name('0'))
            ),
            [
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(
                        new Expr\Variable('normalizers'),
                        new Expr\FuncCall(new Name('array_merge'), [
                            new Node\Arg(new Expr\Variable('normalizers')),
                            new Node\Arg(new Expr\Variable('additionalNormalizers')),
                        ])
                    )),
                ],
            ]
        );
    }

    private function createSerializerStatement(Context $context): Stmt\Expression
    {
        return new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('serializer'),
            new Expr\New_(
                new Name\FullyQualified(Serializer::class),
                [
                    new Node\Arg(new Expr\Variable('normalizers')),
                    new Node\Arg(
                        new Expr\Array_([
                            new Expr\ArrayItem(
                                new Expr\New_(new Name\FullyQualified(JsonEncoder::class), [
                                    new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonEncode::class))),
                                    new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonDecode::class), [
                                        new Node\Arg(new Expr\Array_([
                                            new Expr\ArrayItem(new Expr\ConstFetch(new Name('true')), new Scalar\String_('json_decode_associative')),
                                        ])),
                                    ])),
                                ])
                            ),
                            new Expr\ArrayItem(
                                new Expr\New_(new Name('\\' . $context->getCurrentSchema()->getNamespace() . '\\Runtime\\Client\\FormEncoder'))
                            ),
                        ])
                    ),
                ]
            )
        ));
    }

    private function createReturnStatement(): Stmt\Return_
    {
        return new Stmt\Return_(
            new Expr\New_(
                new Name('static'), [
                    new Node\Arg(new Expr\Variable('httpClient')),
                    new Node\Arg(new Expr\Variable('serializer')),
                ]
            )
        );
    }
}
