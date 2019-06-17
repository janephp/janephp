<?php

namespace Jane;

use PhpParser\Node;

if (!\function_exists('Jane\parserExpression')) {
    function parserExpression(Node\Expr $expr): Node
    {
        if (isPhpParser4()) {
            return new Node\Stmt\Expression($expr);
        }

        return $expr;
    }
}

if (!\function_exists('Jane\parserVariable')) {
    function parserVariable(string $name)
    {
        if (isPhpParser4()) {
            return new Node\Expr\Variable($name);
        }

        return $name;
    }
}

if (!\function_exists('Jane\isPhpParser4')) {
    function isPhpParser4(): bool
    {
        return class_exists('PhpParser\\Node\\Stmt\\Expression');
    }
}
