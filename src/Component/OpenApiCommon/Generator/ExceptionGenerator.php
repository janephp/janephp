<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Generator\Traits\StatusCodeRangeTrait;
use Jane\Component\OpenApiCommon\Naming\ExceptionNaming;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ExceptionGenerator
{
    use StatusCodeRangeTrait;

    private const STATUS_TEXTS = [
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
    private ExceptionNaming $exceptionNaming;
    private array $initialized = [];
    private readonly BaseExceptionsGenerator $baseExceptionsGenerator;

    public function __construct()
    {
        $this->exceptionNaming = new ExceptionNaming();
        $this->baseExceptionsGenerator = new BaseExceptionsGenerator();
    }

    public function generate(string $functionName, int|string $status, Context $context, ?ClassGuess $classGuess, bool $isArray, ?string $classFqdn, ?string $description): ?string
    {
        $isRange = $this->isStatusCodeRange((string) $status);
        $lowerBound = $isRange ? $this->statusCodeRangeBounds((string) $status)[0] : (int) $status;

        if ($lowerBound < 400) {
            return null;
        }

        $status = $isRange ? (string) $status : (int) $status;

        if ((null === $description || '' === $description) && \array_key_exists((int) $status, self::STATUS_TEXTS)) {
            $description = self::STATUS_TEXTS[(int) $status];
        }

        $schema = $context->getCurrentSchema();
        $this->createBaseExceptions($context);

        $highLevelExceptionName = $this->createHighLevelException($context, $status);
        $exceptionName = $this->exceptionNaming->generateExceptionName($status, $functionName);

        if ($classGuess) {
            $propertyName = lcfirst($classGuess->getName());
            if ($isArray) {
                $propertyName .= 'List';
            }

            if (\in_array($propertyName, self::BANNED_VARIABLES)) {
                $propertyName = \sprintf('%sObject', $propertyName);
            }

            $propertyComment = \sprintf(<<<EOD
/**
 * @var %s%s
 */
EOD, '\\' . $classFqdn, $isArray ? '[]' : '');

            $methodName = 'get' . ucfirst($propertyName);
            $exception = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
                new Stmt\Class_(
                    $exceptionName,
                    [
                        'extends' => new Name($highLevelExceptionName),
                        'stmts' => [
                            new Stmt\ClassMethod('__construct', [
                                'flags' => Modifiers::PUBLIC,
                                'params' => [
                                    new Param(
                                        new Expr\Variable($propertyName),
                                        null,
                                        $isArray ? new Node\Identifier('array') : new Name('\\' . $classFqdn),
                                        false,
                                        false,
                                        ['comments' => [new Doc($propertyComment)]],
                                        Modifiers::PRIVATE | Modifiers::READONLY
                                    ),
                                    new Param(
                                        new Expr\Variable('response'),
                                        null,
                                        new Name('\\Symfony\\Contracts\\HttpClient\\ResponseInterface'),
                                        false,
                                        false,
                                        ['comments' => [new Doc(<<<EOD
/**
 * @var \Symfony\Contracts\HttpClient\ResponseInterface
 */
EOD
                                        )]],
                                        Modifiers::PRIVATE | Modifiers::READONLY
                                    ),
                                ],
                                'stmts' => [
                                    new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [new Node\Arg(new Scalar\String_($description))])),
                                ],
                            ]),
                            new Stmt\ClassMethod($methodName, [
                                'flags' => Modifiers::PUBLIC,
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
                                'flags' => Modifiers::PUBLIC,
                                'stmts' => [
                                    new Stmt\Return_(
                                        new Expr\PropertyFetch(
                                            new Expr\Variable('this'),
                                            'response'
                                        )
                                    ),
                                ],
                                'returnType' => new Name('\\Symfony\\Contracts\\HttpClient\\ResponseInterface'),
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
                        new Stmt\ClassMethod('__construct', [
                            'flags' => Modifiers::PUBLIC,
                            'params' => [
                                new Param(
                                    new Expr\Variable('response'),
                                    new Expr\ConstFetch(new Name('null')),
                                    new Node\NullableType(new Name('\\Symfony\\Contracts\\HttpClient\\ResponseInterface')),
                                    false,
                                    false,
                                    ['comments' => [new Doc(<<<EOD
/**
 * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
 */
EOD
                                    )]],
                                    Modifiers::PRIVATE | Modifiers::READONLY
                                ),
                            ],
                            'stmts' => [
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', [
                                    new Node\Arg(new Scalar\String_($description)),
                                ])),
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
                            'returnType' => new Name('?\\Symfony\\Contracts\\HttpClient\\ResponseInterface'),
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
        $this->baseExceptionsGenerator->generate($context->getCurrentSchema(), '', $context);
    }

    private function createHighLevelException(Context $context, int|string $status): string
    {
        $schema = $context->getCurrentSchema();
        $isRange = $this->isStatusCodeRange((string) $status);
        $lowerBound = $isRange ? $this->statusCodeRangeBounds((string) $status)[0] : (int) $status;
        $highLevelExceptionName = $this->exceptionNaming->generateExceptionName($status);
        $unique = $schema->getRootName() . $schema->getDirectory();

        if ($this->initialized[$unique]['high-level'][$status] ?? false) {
            return $highLevelExceptionName;
        }
        $this->initialized[$unique]['high-level'][$status] = true;

        $parentConstructorArgs = [
            new Node\Arg(new Expr\Variable('message')),
        ];
        if (!$isRange) {
            $parentConstructorArgs[] = new Node\Arg(new Scalar\LNumber((int) $status));
        }

        $highLevelException = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Exception'), [
            new Stmt\Class_(
                $highLevelExceptionName,
                [
                    'flags' => Modifiers::ABSTRACT,
                    'extends' => new Name('\\RuntimeException'),
                    'implements' => [
                        new Name($lowerBound >= 500 ? 'ServerException' : 'ClientException'),
                        new Name('WithResponseInterface'),
                    ],
                    'stmts' => [
                        new Stmt\ClassMethod('__construct', [
                            'flags' => Modifiers::PUBLIC,
                            'params' => [
                                new Param(new Expr\Variable('message'), null, new Name('string')),
                            ],
                            'stmts' => [
                                new Stmt\Expression(new Expr\StaticCall(new Name('parent'), '__construct', $parentConstructorArgs)),
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
