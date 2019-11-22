<?php

namespace Jane\OpenApi\Generator\Authentication;

use Http\Client\Common\Plugin;
use Http\Message\Authentication\Bearer;
use Jane\OpenApi\Guesser\Guess\SecuritySchemeGuess;
use Jane\OpenApi\JsonSchema\Model\HTTPSecurityScheme;
use PhpParser\Node;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait GetPluginGenerator
{
    protected function createGetPlugin(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod
    {
        $stmts = [];
        switch ($securityScheme->getType()) {
            case SecuritySchemeGuess::TYPE_HTTP:
                /** @var HTTPSecurityScheme $object */
                $object = $securityScheme->getObject();

                // @todo handle this ~
                // $scheme = $object->getScheme() ?? 'Bearer';

                $stmts[] = new Stmt\Return_(new Expr\New_(new Name\FullyQualified(Plugin\AuthenticationPlugin::class), [
                    new Node\Arg(new Expr\New_(new Name\FullyQualified(Bearer::class), [
                        new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_('token'))),
                    ])),
                ]));
                break;
            case SecuritySchemeGuess::TYPE_API_KEY:
                break;
        }

        return new Stmt\ClassMethod('getPlugin', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => $stmts,
            'returnType' => new Name\FullyQualified(Plugin::class),
        ]);
    }
}
