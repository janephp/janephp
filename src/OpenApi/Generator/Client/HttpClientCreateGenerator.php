<?php

namespace Jane\OpenApi\Generator\Client;

use Http\Client\Common\PluginClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Generator\Psr18ClientGenerator;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node;

trait HttpClientCreateGenerator
{
    use ServerPluginGenerator;
    use AuthenticationPluginGenerator;

    protected function getHttpClientCreateExpr(Context $context)
    {
        $discoveryClientClass = $this instanceof Psr18ClientGenerator ? Psr18ClientDiscovery::class : HttpClientDiscovery::class;

        /** @var OpenApi $openApi */
        $openApi = $context->getCurrentSchema()->getParsed();
        $httpClientAssign = new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\StaticCall(
                new Name\FullyQualified($discoveryClientClass),
                'find'
            )
        ));

        if (!$this->needsServerPlugins($openApi)) {
            return [$httpClientAssign];
        }

        $statements = [
            $httpClientAssign,
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('plugins'),
                new Expr\Array_()
            )),
        ];

        $statements = array_merge($statements, $this->getServerPluginsStatements($openApi));

        $statements[] = new Stmt\Expression(new Expr\Assign(
            new Expr\Variable('httpClient'),
            new Expr\New_(
                new Name\FullyQualified(PluginClient::class),
                [
                    new Node\Arg(new Expr\Variable('httpClient')),
                    new Node\Arg(new Expr\Variable('plugins')),
                ]
            )
        ));

        return $statements;
    }
}
