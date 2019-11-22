<?php

namespace Jane\OpenApi\Generator\Authentication;

use Jane\OpenApi\Guesser\Guess\SecuritySchemeGuess;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait ConstructGenerator
{
    protected function createConstruct(SecuritySchemeGuess $securityScheme): array
    {
        $needs = [];
        switch ($securityScheme->getType()) {
            case SecuritySchemeGuess::TYPE_HTTP:
                $needs['token'] = new Name('string');
                break;
        }

        $stmts = [];
        $params = [];
        $properties = [];
        foreach ($needs as $field => $type) {
            $properties[] = new Stmt\Property(Stmt\Class_::MODIFIER_PRIVATE, [new Stmt\PropertyProperty($field)]);
            $params[] = new Param(new Expr\Variable($field), null, $type);
            $stmts[] = new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('this'), new Scalar\String_($field)), new Expr\Variable($field)));
        }

        $method = new Stmt\ClassMethod('__construct', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $params,
            'stmts' => $stmts,
        ]);

        return [$properties, $method];
    }
}
