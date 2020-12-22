<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Naming\ExceptionNaming;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ExceptionGenerator
{
    private $exceptionNaming;

    private $intialized = [];

    public function __construct()
    {
        $this->exceptionNaming = new ExceptionNaming();
    }

    public function generate(string $functionName, int $status, Context $context, ?ClassGuess $classGuess, bool $isArray, ?string $classFqdn, ?string $description): ?string
    {
        if ($status < 400) {
            return null;
        }

        $schema = $context->getCurrentSchema();
        $this->createBaseExceptions($context);

        $exceptionName = $this->exceptionNaming->generateExceptionName($status, $functionName);

        if ($classGuess) {
            $propertyName = lcfirst($classGuess->getName());

            if ($isArray) {
                $propertyName .= 'List';
            }

            $methodName = 'get' . ucfirst($propertyName);
            $exception = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
                new Stmt\Class_(
                    new Name($exceptionName),
                    [
                        'implements' => [
                            new Name($status >= 500 ? 'ServerException' : 'ClientException'),
                        ],
                        'extends' => new Name('\\RuntimeException'),
                        'stmts' => [
                            new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [
                                new Stmt\PropertyProperty($propertyName),
                            ]),
                            new Stmt\ClassMethod('__construct', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => [
                                    new Param(new Node\Expr\Variable($propertyName), null, $isArray ? null : new Name('\\' . $classFqdn)),
                                ],
                                'stmts' => [
                                    new Node\Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                        new Scalar\String_($description),
                                        new Scalar\LNumber($status),
                                    ])),
                                    new Node\Stmt\Expression(new Expr\Assign(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            $propertyName
                                        ), new Expr\Variable($propertyName)
                                    )),
                                ],
                            ]),
                            new Stmt\ClassMethod($methodName, [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'stmts' => [
                                    new Stmt\Return_(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            $propertyName
                                        )
                                    ),
                                ],
                            ]),
                        ],
                    ]
                ),
            ]);

            $schema->addFile(new File($schema->getDirectory() . '/Exception/' . $exceptionName . '.php', $exception, 'Exception'));

            return $exceptionName;
        }

        $exception = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Class_(
                new Name($exceptionName),
                [
                    'implements' => [
                        new Name($status >= 500 ? 'ServerException' : 'ClientException'),
                    ],
                    'extends' => new Name('\\RuntimeException'),
                    'stmts' => [
                        new Stmt\ClassMethod('__construct', [
                            'type' => Stmt\Class_::MODIFIER_PUBLIC,
                            'stmts' => [
                                new Node\Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Scalar\String_($description),
                                    new Scalar\LNumber($status),
                                ])),
                            ],
                        ]),
                    ],
                ]
            ),
        ]);

        $schema->addFile(new File($schema->getDirectory() . '/Exception/' . $exceptionName . '.php', $exception, 'Exception'));

        return $exceptionName;
    }

    public function createBaseExceptions(Context $context): void
    {
        $schema = $context->getCurrentSchema();
        $registry = $context->getRegistry();

        $unique = $schema->getRootName() . $schema->getDirectory();
        if (\array_key_exists($unique, $this->intialized)) {
            return;
        }
        $this->intialized[$unique] = true;

        $apiException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Interface_(
                new Name('ApiException'),
                [
                    'extends' => [
                        new Name('\\Throwable'),
                    ],
                ]
            ),
        ]);

        $clientException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Interface_(
                new Name('ClientException'),
                [
                    'extends' => [
                        new Name('ApiException'),
                    ],
                ]
            ),
        ]);

        $serverException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Interface_(
                new Name('ServerException'),
                [
                    'extends' => [
                        new Name('ApiException'),
                    ],
                ]
            ),
        ]);

        $schema->addFile(new File($schema->getDirectory() . '/Exception/ApiException.php', $apiException, 'Exception'));
        $schema->addFile(new File($schema->getDirectory() . '/Exception/ClientException.php', $clientException, 'Exception'));
        $schema->addFile(new File($schema->getDirectory() . '/Exception/ServerException.php', $serverException, 'Exception'));

        if ($registry->getThrowUnexpectedStatusCode()) {
            $unexpectedStatusCodeException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
                new Stmt\Class_(
                    new Name('UnexpectedStatusCodeException'),
                    [
                        'implements' => [
                            new Name('ClientException'),
                        ],
                        'extends' => new Name('\\RuntimeException'),
                        'flags' => Stmt\Class_::MODIFIER_FINAL,
                        'stmts' => [
                            new Stmt\ClassMethod('__construct', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => [
                                    new Param(new Expr\Variable('status')),
                                ],
                                'stmts' => [
                                    new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                        new Node\Arg(new Scalar\String_('')),
                                        new Node\Arg(new Expr\Variable('status')),
                                    ])),
                                ],
                            ]),
                        ],
                    ]
                ),
            ]);

            $schema->addFile(new File($schema->getDirectory() . '/Exception/UnexpectedStatusCodeException.php', $unexpectedStatusCodeException, 'Exception'));
        }
    }
}
