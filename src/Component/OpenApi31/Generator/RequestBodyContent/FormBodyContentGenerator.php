<?php

namespace Jane\Component\OpenApi31\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Model\Encoding;
use Jane\Component\OpenApi31\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\RequestBodyContent\AbstractBodyContentGenerator;
use Jane\Component\OpenApiRuntime\Client\MultipartStreamBuilder;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class FormBodyContentGenerator extends AbstractBodyContentGenerator
{
    public function __construct(DenormalizerInterface $denormalizer)
    {
        parent::__construct($denormalizer, Schema::class);
    }

    public function getSerializeStatements($content, string $contentType, string $reference, Context $context): array
    {
        if (preg_match('/multipart\/form-data/', $contentType)) {
            $partOptions = $this->guessPartOptions($content);
            $addResourceArgs = [
                new Arg(new Expr\Variable('key')),
                new Arg(new Expr\Variable('value')),
            ];
            $statements = [
                new Stmt\Expression(new Expr\Assign(new Expr\Variable('bodyBuilder'), new Expr\New_(new Name('\\' . MultipartStreamBuilder::class)))),
                new Stmt\Expression(new Expr\Assign(new Expr\Variable('formParameters'), new Expr\MethodCall(new Expr\Variable('serializer'), 'normalize', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                    new Arg(new Scalar\String_('json')),
                ]))),
            ];

            $resourceOptionsStatements = [];
            if (\count($partOptions) > 0) {
                $statements[] = new Stmt\Expression(new Expr\Assign(new Expr\Variable('partOptions'), $this->partOptionsToExpr($partOptions)));
                $resourceOptionsStatements = $this->resourceOptionsStatements();
                $addResourceArgs[] = new Arg(new Expr\Variable('resourceOptions'));
            }

            $statements[] = new Stmt\Foreach_(new Expr\Variable('formParameters'), new Expr\Variable('value'), [
                'keyVar' => new Expr\Variable('key'),
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(new Expr\Variable('value'),
                        new Expr\Ternary(
                            new Expr\FuncCall(new Name('is_int'), [new Arg(new Expr\Variable('value'))]),
                            new Expr\Cast\String_(new Expr\Variable('value')),
                            new Expr\Variable('value')
                        )
                    )),
                    new Stmt\If_(
                        new Expr\BinaryOp\BooleanOr(
                            new Expr\FuncCall(new Name('is_array'), [new Arg(new Expr\Variable('value'))]),
                            new Expr\Instanceof_(new Expr\Variable('value'), new Name('\stdClass'))
                        ),
                        [
                            'stmts' => [
                                new Stmt\Expression(new Expr\Assign(
                                    new Expr\Variable('value'),
                                    new Expr\MethodCall(new Expr\Variable('serializer'), 'serialize', [
                                        new Arg(new Expr\Cast\Array_(new Expr\Variable('value'))),
                                        new Arg(new Scalar\String_('json')),
                                    ])
                                )),
                            ],
                        ]
                    ),
                    ...$resourceOptionsStatements,
                    new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'addResource', $addResourceArgs)),
                ],
            ]);
            $statements[] = new Stmt\Return_(new Expr\Array_([
                new Expr\Array_([
                    new Expr\ArrayItem(
                        new Expr\Array_([new Expr\ArrayItem(
                            new Expr\BinaryOp\Concat(
                                new Scalar\String_('multipart/form-data; boundary="'),
                                new Expr\BinaryOp\Concat(
                                    new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'getBoundary'),
                                    new Scalar\String_('"')
                                )
                            )
                        )]),
                        new Scalar\String_('Content-Type')
                    ),
                ]),
                new Expr\MethodCall(new Expr\Variable('bodyBuilder'), 'build'),
            ]));

            return $statements;
        }

        return [new Stmt\Return_(new Expr\Array_([
            new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\Array_([new Expr\ArrayItem(new Scalar\String_($contentType))]),
                    new Scalar\String_('Content-Type')
                ),
            ]),
            new Expr\FuncCall(new Name('http_build_query'), [
                new Arg(new Expr\MethodCall(
                    new Expr\Variable('serializer'),
                    'normalize',
                    [
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body')),
                        new Arg(new Scalar\String_('json')),
                    ]
                )),
            ]),
        ]))];
    }

    /**
     * Compute per-part options for MultipartStreamBuilder::addResource(): a
     * filename for binary (file upload) properties, and a Content-Type header
     * when the media type declares one through the encoding object.
     *
     * @return array<string, array{filename?: string, headers?: array<string, string>}>
     */
    private function guessPartOptions(MediaType $content): array
    {
        $schema = ($content->schema ?? null);

        if ($schema instanceof Reference) {
            [, $schema] = $this->guessClass->resolve($schema, Schema::class);
        }

        $partOptions = [];

        if ($schema instanceof Schema && null !== ($schema->properties ?? null)) {
            foreach (($schema->properties ?? null ?? []) as $property => $propertySchema) {
                if ($propertySchema instanceof Reference) {
                    [, $propertySchema] = $this->guessClass->resolve($propertySchema, Schema::class);
                }

                if ($propertySchema instanceof Schema && 'string' === ($propertySchema->type ?? null) && 'binary' === ($propertySchema->format ?? null)) {
                    $partOptions[$property]['filename'] = $property;
                }
            }
        }

        foreach (($content->encoding ?? null) ?? [] as $property => $encoding) {
            if (!$encoding instanceof Encoding) {
                continue;
            }

            $encodingContentType = ($encoding->contentType ?? null);

            // wildcard and comma-separated values are match constraints, not a concrete media type
            if (null === $encodingContentType || str_contains($encodingContentType, '*') || str_contains($encodingContentType, ',')) {
                continue;
            }

            $partOptions[$property]['headers'] = ['Content-Type' => $encodingContentType];
        }

        return $partOptions;
    }

    /**
     * Statements resolving the effective addResource() options for the current
     * form parameter: the generation-time default filename is dropped when the
     * value is a resource backed by a real file, so that the multipart builder
     * keeps deriving the actual file name (and guessing a Content-Type from
     * its extension) exactly as it did before.
     *
     * Emitted PHP:
     *
     *     $resourceOptions = $partOptions[$key] ?? [];
     *     if (isset($resourceOptions['filename'])) {
     *         $uri = null;
     *         if (is_resource($value)) {
     *             $uri = stream_get_meta_data($value)['uri'] ?? null;
     *         }
     *         if (is_string($uri) && is_file($uri)) {
     *             unset($resourceOptions['filename']);
     *         }
     *     }
     *
     * @return Stmt[]
     */
    private function resourceOptionsStatements(): array
    {
        return [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('resourceOptions'), new Expr\BinaryOp\Coalesce(
                new Expr\ArrayDimFetch(new Expr\Variable('partOptions'), new Expr\Variable('key')),
                new Expr\Array_([])
            ))),
            new Stmt\If_(
                new Expr\Isset_([new Expr\ArrayDimFetch(new Expr\Variable('resourceOptions'), new Scalar\String_('filename'))]),
                [
                    'stmts' => [
                        new Stmt\Expression(new Expr\Assign(new Expr\Variable('uri'), new Expr\ConstFetch(new Name('null')))),
                        new Stmt\If_(
                            new Expr\FuncCall(new Name('is_resource'), [new Arg(new Expr\Variable('value'))]),
                            [
                                'stmts' => [
                                    new Stmt\Expression(new Expr\Assign(new Expr\Variable('uri'), new Expr\BinaryOp\Coalesce(
                                        new Expr\ArrayDimFetch(
                                            new Expr\FuncCall(new Name('stream_get_meta_data'), [new Arg(new Expr\Variable('value'))]),
                                            new Scalar\String_('uri')
                                        ),
                                        new Expr\ConstFetch(new Name('null'))
                                    ))),
                                ],
                            ]
                        ),
                        new Stmt\If_(
                            new Expr\BinaryOp\BooleanAnd(
                                new Expr\FuncCall(new Name('is_string'), [new Arg(new Expr\Variable('uri'))]),
                                new Expr\FuncCall(new Name('is_file'), [new Arg(new Expr\Variable('uri'))])
                            ),
                            [
                                'stmts' => [
                                    new Stmt\Unset_([new Expr\ArrayDimFetch(new Expr\Variable('resourceOptions'), new Scalar\String_('filename'))]),
                                ],
                            ]
                        ),
                    ],
                ]
            ),
        ];
    }

    /**
     * @param array<string, string|array<string, mixed>> $values
     */
    private function partOptionsToExpr(array $values): Expr\Array_
    {
        $items = [];
        foreach ($values as $key => $value) {
            $items[] = new Expr\ArrayItem(
                \is_array($value) ? $this->partOptionsToExpr($value) : new Scalar\String_($value),
                new Scalar\String_($key)
            );
        }

        return new Expr\Array_($items);
    }
}
