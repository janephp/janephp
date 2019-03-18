<?php

namespace Jane;

use PhpParser\Node;

function parserExpression(Node\Expr $expr): Node
{
    if (isPhpParser4()) {
        return new Node\Stmt\Expression($expr);
    }

    return $expr;
}

function parserVariable(string $name)
{
    if (isPhpParser4()) {
        return new Node\Expr\Variable($name);
    }

    return $name;
}

function isPhpParser4(): bool
{
    return class_exists('PhpParser\\Node\\Stmt\\Expression');
}
