<?php

namespace Jane\OpenApiCommon\Generator\Client;

use Jane\JsonSchema\Registry;
use Jane\OpenApiCommon\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;

trait AuthenticationPluginGenerator
{
    protected function needsAuthenticationPlugins(Registry $registry): bool
    {
        foreach ($registry->getSchemas() as $schema) {
            if ($schema instanceof Schema && \count($schema->getSecuritySchemes()) > 0) {
                return true;
            }
        }

        return false;
    }

    protected function getAuthenticationPluginsStatements(Registry $registry): array
    {
        return [
            new Stmt\If_(
                new Expr\BinaryOp\NotIdentical(
                    new Expr\ConstFetch(new Name('null')),
                    new Expr\Variable('authentication')
                ),
                [
                    'stmts' => [
                        new Stmt\Expression(new Expr\Assign(
                            new Expr\ArrayDimFetch(new Expr\Variable('plugins')),
                            new Expr\MethodCall(new Expr\Variable('authentication'), 'getPlugin')
                        )),
                    ],
                ]
            ),
        ];
    }
}
