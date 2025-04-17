<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Naming\ExceptionNaming;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ExceptionGenerator
{
    public static $statusTexts = [
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Content Too Large',                                           // RFC-ietf-httpbis-semantics
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',                                               // RFC2324
        421 => 'Misdirected Request',                                         // RFC7540
        422 => 'Unprocessable Content',                                       // RFC-ietf-httpbis-semantics
        423 => 'Locked',                                                      // RFC4918
        424 => 'Failed Dependency',                                           // RFC4918
        425 => 'Too Early',                                                   // RFC-ietf-httpbis-replay-04
        426 => 'Upgrade Required',                                            // RFC2817
        428 => 'Precondition Required',                                       // RFC6585
        429 => 'Too Many Requests',                                           // RFC6585
        431 => 'Request Header Fields Too Large',                             // RFC6585
        451 => 'Unavailable For Legal Reasons',                               // RFC7725
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',                                     // RFC2295
        507 => 'Insufficient Storage',                                        // RFC4918
        508 => 'Loop Detected',                                               // RFC5842
        510 => 'Not Extended',                                                // RFC2774
        511 => 'Network Authentication Required',                             // RFC6585
    ];

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

        if ((null === $description || '' === $description) && \array_key_exists($status, self::$statusTexts)) {
            $description = self::$statusTexts[$status];
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
                $propertyName = \sprintf('%sObject', $propertyName);
            }

            $propertyComment = \sprintf(<<<EOD
/**
 * @var %s%s
 */
EOD
                , '\\' . $classFqdn, $isArray ? '[]' : '');

            $methodName = 'get' . ucfirst($propertyName);
            $exception = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
                new Stmt\Class_(
                    $exceptionName,
                    [
                        'extends' => new Name($highLevelExceptionName),
                        'stmts' => [
                            new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [
                                new Stmt\PropertyProperty($propertyName),
                            ], ['comments' => [new Doc($propertyComment)]]),
                            new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [
                                new Stmt\PropertyProperty('response'),
                            ], ['comments' => [new Doc(<<<EOD
/**
 * @var \Psr\Http\Message\ResponseInterface
 */
EOD
                            )]]),
                            new Stmt\ClassMethod('__construct', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => [
                                    new Param(new Expr\Variable($realPropertyName), null, $isArray ? null : new Name('\\' . $classFqdn)),
                                    new Param(new Expr\Variable('response'), null, new Name('\\Psr\\Http\\Message\\ResponseInterface')),
                                ],
                                'stmts' => [
                                    new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                        new Scalar\String_($description),
                                    ])),
                                    new Stmt\Expression(new Expr\Assign(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            $propertyName
                                        ), new Expr\Variable($realPropertyName)
                                    )),
                                    new Stmt\Expression(new Expr\Assign(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            'response'
                                        ), new Expr\Variable('response')
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
                                'returnType' => ($isArray ? null : new Name('\\' . $classFqdn)),
                            ]),
                            new Stmt\ClassMethod('getResponse', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'stmts' => [
                                    new Stmt\Return_(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            'response'
                                        )
                                    ),
                                ],
                                'returnType' => new Name('\\Psr\\Http\\Message\\ResponseInterface'),
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
                $exceptionName,
                [
                    'extends' => new Name($highLevelExceptionName),
                    'stmts' => [
                        new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [
                            new Stmt\PropertyProperty('response'),
                        ], ['comments' => [new Doc(<<<EOD
/**
 * @var \Psr\Http\Message\ResponseInterface
 */
EOD
                        )]]),
                        new Stmt\ClassMethod('__construct', [
                            'type' => Stmt\Class_::MODIFIER_PUBLIC,
                            'params' => [
                                new Param(new Expr\Variable('response'), new Expr\ConstFetch(new Name('null')), new Name('\\Psr\\Http\\Message\\ResponseInterface')),
                            ],
                            'stmts' => [
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Scalar\String_($description)),
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
                            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
                'ApiException',
                [
                    'extends' => [
                        new Name('\\Throwable'),
                    ],
                ]
            ),
        ]);

        $clientException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Interface_(
                'ClientException',
                [
                    'extends' => [
                        new Name('ApiException'),
                    ],
                ]
            ),
        ]);

        $serverException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Interface_(
                'ServerException',
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
                    'UnexpectedStatusCodeException',
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
                $highLevelExceptionName,
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
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Expr\Variable('message')),
                                    new Node\Arg(new Scalar\LNumber($code)),
                                ])),
                            ],
                        ]),
                    ],
                ]
            ),
        ]);

        $schema->addFile(new File(\sprintf('%s/Exception/%s.php', $schema->getDirectory(), $highLevelExceptionName), $highLevelException, 'Exception'));

        return $highLevelExceptionName;
    }
}
