<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Registry\Registry;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * Generates the exception skeleton shared by every generated client:
 * the ApiException / ClientException / ServerException / WithResponseInterface
 * markers, plus (when enabled) the UnexpectedStatusCodeException and
 * BadResponseException classes.
 *
 * Idempotent per schema: consecutive calls for the same schema do not
 * duplicate files.
 */
class BaseExceptionsGenerator implements GeneratorInterface
{
    /** @var array<string, true> */
    private array $generatedSchemas = [];

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $unique = $schema->getRootName() . $schema->getDirectory();
        if (\array_key_exists($unique, $this->generatedSchemas)) {
            return;
        }
        $this->generatedSchemas[$unique] = true;

        /** @var Registry $registry */
        $registry = $context->getRegistry();
        $namespace = $schema->getNamespace() . '\\Exception';

        $apiException = new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Interface_(
                'ApiException',
                [
                    'extends' => [
                        new Name('\\Throwable'),
                    ],
                ]
            ),
        ]);

        $clientException = new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Interface_(
                'ClientException',
                [
                    'extends' => [
                        new Name('ApiException'),
                    ],
                ]
            ),
        ]);

        $serverException = new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Interface_(
                'ServerException',
                [
                    'extends' => [
                        new Name('ApiException'),
                    ],
                ]
            ),
        ]);

        $withResponseInterface = new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Interface_(
                'WithResponseInterface',
                [
                    'stmts' => [
                        new Stmt\ClassMethod('getResponse', [
                            'flags' => Modifiers::PUBLIC,
                            'stmts' => null,
                            'returnType' => new Name('?\\Psr\\Http\\Message\\ResponseInterface'),
                        ]),
                    ],
                ]
            ),
        ]);

        $schema->addFile(new File($schema->getDirectory() . '/Exception/ApiException.php', $apiException, 'Exception'));
        $schema->addFile(new File($schema->getDirectory() . '/Exception/ClientException.php', $clientException, 'Exception'));
        $schema->addFile(new File($schema->getDirectory() . '/Exception/ServerException.php', $serverException, 'Exception'));
        $schema->addFile(new File($schema->getDirectory() . '/Exception/WithResponseInterface.php', $withResponseInterface, 'Exception'));

        if ($registry->getThrowUnexpectedStatusCode()) {
            $schema->addFile(new File($schema->getDirectory() . '/Exception/UnexpectedStatusCodeException.php', $this->createUnexpectedStatusCodeException($namespace), 'Exception'));
            $schema->addFile(new File($schema->getDirectory() . '/Exception/BadResponseException.php', $this->createBadResponseException($namespace), 'Exception'));
        }
    }

    private function createUnexpectedStatusCodeException(string $namespace): Stmt\Namespace_
    {
        return new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Class_(
                'UnexpectedStatusCodeException',
                [
                    'implements' => [
                        new Name('ClientException'),
                        new Name('WithResponseInterface'),
                    ],
                    'extends' => new Name('\\RuntimeException'),
                    'stmts' => [
                        new Stmt\Property(Modifiers::PRIVATE, [
                            new Stmt\PropertyProperty('response'),
                        ], ['comments' => [new Doc(<<<EOD
/**
 * @var \Psr\Http\Message\ResponseInterface|null
 */
EOD
                        )]]),
                        new Stmt\ClassMethod('__construct', [
                            'flags' => Modifiers::PUBLIC,
                            'params' => [
                                new Param(new Expr\Variable('status')),
                                new Param(new Expr\Variable('message'), new Scalar\String_('')),
                                new Param(
                                    new Expr\Variable('response'),
                                    new Expr\ConstFetch(new Name('null')),
                                    new Node\NullableType(new Name('\\Psr\\Http\\Message\\ResponseInterface'))
                                ),
                            ],
                            'stmts' => [
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Expr\Variable('message')),
                                    new Node\Arg(new Expr\Variable('status')),
                                ])),
                                new Stmt\Expression(new Expr\Assign(
                                    new Expr\PropertyFetch(
                                        new Expr\Variable('this'),
                                        'response'
                                    ), new Expr\Variable('response')
                                )),
                            ],
                        ]),
                        new Stmt\ClassMethod('getResponse', [
                            'flags' => Modifiers::PUBLIC,
                            'stmts' => [
                                new Stmt\Return_(
                                    new Expr\PropertyFetch(
                                        new Expr\Variable('this'),
                                        'response'
                                    )
                                ),
                            ],
                            'returnType' => new Name('?\\Psr\\Http\\Message\\ResponseInterface'),
                        ]),
                    ],
                ]
            ),
        ]);
    }

    private function createBadResponseException(string $namespace): Stmt\Namespace_
    {
        return new Stmt\Namespace_(new Name($namespace), [
            new Stmt\Class_(
                'BadResponseException',
                [
                    'extends' => new Name('UnexpectedStatusCodeException'),
                    'stmts' => [
                        new Stmt\ClassMethod('__construct', [
                            'flags' => Modifiers::PUBLIC,
                            'params' => [
                                new Param(new Expr\Variable('status')),
                                new Param(new Expr\Variable('message'), new Scalar\String_('')),
                                new Param(
                                    new Expr\Variable('response'),
                                    new Expr\ConstFetch(new Name('null')),
                                    new Node\NullableType(new Name('\\Psr\\Http\\Message\\ResponseInterface'))
                                ),
                            ],
                            'stmts' => [
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Expr\Variable('status')),
                                    new Node\Arg(new Expr\Variable('message')),
                                    new Node\Arg(new Expr\Variable('response')),
                                ])),
                            ],
                        ]),
                    ],
                ]
            ),
        ]);
    }
}
