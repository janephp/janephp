<?php

namespace Jane\OpenApi\Generator\Authentication;

use Http\Client\Common\Plugin;
use Http\Message\Authentication;
use Jane\OpenApi\Guesser\Guess\SecuritySchemeGuess;
use Jane\OpenApi\JsonSchema\Model\HTTPSecurityScheme;
use PhpParser\Node;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Psr\Http\Message\RequestInterface;

trait GetPluginGenerator
{
    protected function createGetPlugin(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        $stmts = [];
        switch ($securityScheme->getType()) {
            case SecuritySchemeGuess::TYPE_HTTP:
                /** @var HTTPSecurityScheme $object */
                $object = $securityScheme->getObject();
                $scheme = $object->getScheme() ?? 'Bearer';
                $scheme = ucfirst(mb_strtolower($scheme));

                $needs = [];
                $anonymousClass = [
                    'properties' => [],
                    'constructParameters' => [],
                    'constructStatements' => [],
                    'fetchedValue' => null,
                ];

                switch ($scheme) {
                    case 'Bearer':
                        $needs['token'] = new Name('string');
                        $anonymousClass['fetchedValue'] = new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('token'));
                        break;
                    case 'Basic':
                        $needs['username'] = new Name('string');
                        $needs['password'] = new Name('string');
                        $anonymousClass['fetchedValue'] = new Expr\FuncCall(new Name('base64_encode'), [
                            new Node\Arg(new Expr\FuncCall(new Name('sprintf'), [
                                new Node\Arg(new Scalar\String_('%s:%s')),
                                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('username'))),
                                new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('password'))),
                            ])),
                        ]);
                        break;
                }
                foreach ($needs as $field => $type) {
                    $anonymousClass['properties'][] = new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [new Stmt\PropertyProperty($field)]);
                    $anonymousClass['constructParameters'][] = new Param(new Expr\Variable($field), null, $type);
                    $anonymousClass['constructStatements'][] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_($field)), new Expr\Variable($field)));
                }

                $pluginClass = new Stmt\Class_(null, [
                    'implements' => [new Name\FullyQualified(Authentication::class)],
                    'stmts' => array_merge(
                        $anonymousClass['properties'],
                        [
                            new Stmt\ClassMethod('__construct', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => $anonymousClass['constructParameters'],
                                'stmts' => $anonymousClass['constructStatements'],
                            ]),
                            new Stmt\ClassMethod('authenticate', [
                                'type' => Stmt\Class_::MODIFIER_PUBLIC,
                                'params' => [new Param(new Expr\Variable('request'), null, new Name\FullyQualified(RequestInterface::class))],
                                'stmts' => [
                                    new Stmt\Expression(new Expr\Assign(new Expr\Variable('header'), new Expr\FuncCall(new Name('sprintf'), [
                                        new Node\Arg(new Scalar\String_($scheme . ' %s')),
                                        new Node\Arg($anonymousClass['fetchedValue']),
                                    ]))),
                                    new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('request'), 'withHeader', [
                                        new Node\Arg(new Scalar\String_('Authorization')),
                                        new Node\Arg(new Expr\Variable('header')),
                                    ])),
                                ],
                            ]),
                        ]
                    ),
                ]);

                $stmts[] = new Stmt\Return_(new Expr\New_(new Name\FullyQualified(Plugin\AuthenticationPlugin::class), [
                    new Node\Arg(new Expr\New_($pluginClass, [
                        new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('token'))),
                    ])),
                ]));
                break;
            case SecuritySchemeGuess::TYPE_API_KEY:
                // @todo
                break;
        }

        return new Stmt\ClassMethod('getPlugin', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => $stmts,
            'returnType' => new Name\FullyQualified(Plugin::class),
        ]);
    }
}
