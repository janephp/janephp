<?php

namespace Jane\OpenApi\Generator\Parameter;

use PhpParser\Node\Expr;

class QueryParameterGenerator extends NonBodyParameterGenerator
{
    public function generateInputParamStatements($parameter, Expr $queryParamVariable): array
    {
        $arguments = $this->generateInputParamArguments($parameter);

        return [
            new Expr\MethodCall(
                $queryParamVariable,
                'addQueryParameter',
                $arguments
            ),
        ];
    }
}
