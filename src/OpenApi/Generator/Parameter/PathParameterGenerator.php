<?php

namespace Jane\OpenApi\Generator\Parameter;

use PhpParser\Node\Expr;

class PathParameterGenerator extends NonBodyParameterGenerator
{
    public function generateInputParamStatements($parameter, Expr $queryParamVariable): array
    {
        return [];
    }
}
