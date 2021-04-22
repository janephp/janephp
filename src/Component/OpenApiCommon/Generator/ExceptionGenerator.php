<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Naming\ExceptionNaming;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ExceptionGenerator
{
    private const BANNED_VARIABLES = ['message', 'code', 'file', 'line'];
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

        $highLevelExceptionName = $this->createHighLevelException($context, $status);
        $exceptionName = $this->exceptionNaming->generateExceptionName($status, $functionName);

        if ($classGuess) {
            $realPropertyName = $propertyName = lcfirst($classGuess->getName());
            if ($isArray) {
                $propertyName .= 'List';
                $realPropertyName = $propertyName;
            }

            if (\in_array($propertyName, self::BANNED_VARIABLES)) {
                $propertyName = sprintf('_%s', $propertyName);
            }

            $methodName = 'get' . ucfirst($realPropertyName);
            $exception = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
                new Stmt\Class_(
                    new Name($exceptionName),
                    [
                        'extends' => new Name($highLevelExceptionName),
                        'stmts' => [
                            new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [
                                new Stmt\PropertyProperty($propertyName),
                            ]),
                            new Stmt\ClassMethod('__construct', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => [
                                    new Param(new Node\Expr\Variable($realPropertyName), null, $isArray ? null : new Name('\\' . $classFqdn)),
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
                                        ), new Expr\Variable($realPropertyName)
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
                    'extends' => new Name($highLevelExceptionName),
                    'stmts' => [
                        new Stmt\ClassMethod('__construct', [
                            'type' => Stmt\Class_::MODIFIER_PUBLIC,
                            'stmts' => [
                                new Node\Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Scalar\String_($description)),
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
        if (\array_key_exists($unique, $this->intialized) && $this->intialized[$unique]['base'] ?? false) {
            return;
        }
        $this->intialized[$unique]['base'] = true;

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
                                    new Param(new Expr\Variable('message'), new Scalar\String_('')),
                                ],
                                'stmts' => [
                                    new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                        new Node\Arg(new Expr\Variable('message')),
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

    private function createHighLevelException(Context $context, int $code): string
    {
        $schema = $context->getCurrentSchema();
        $highLevelExceptionName = $this->exceptionNaming->generateExceptionName($code);
        $unique = $schema->getRootName() . $schema->getDirectory();

        if (\array_key_exists($unique, $this->intialized) && ($this->intialized[$unique] ?? false) && ($this->intialized[$unique][$code] ?? false)) {
            return $highLevelExceptionName;
        }
        $this->intialized[$unique][$code] = true;

        $highLevelException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Class_(
                new Name($highLevelExceptionName),
                [
                    'extends' => new Name('\\RuntimeException'),
                    'implements' => [new Name($code >= 500 ? 'ServerException' : 'ClientException')],
                    'stmts' => [
                        new Stmt\ClassMethod('__construct', [
                            'type' => Stmt\Class_::MODIFIER_PUBLIC,
                            'params' => [
                                new Param(new Expr\Variable('message'), null, new Name('string')),
                            ],
                            'stmts' => [
                                new Node\Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Expr\Variable('message')),
                                    new Node\Arg(new Scalar\LNumber($code)),
                                ])),
                            ],
                        ]),
                    ],
                ]
            ),
        ]);

        $schema->addFile(new File(sprintf('%s/Exception/%s.php', $schema->getDirectory(), $highLevelExceptionName), $highLevelException, 'Exception'));

        return $highLevelExceptionName;
    }
}
