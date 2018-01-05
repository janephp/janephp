<?php

namespace Jane\OpenApi\Generator\Parameter;

use PhpParser\Node\Expr;

class FormDataParameterGenerator extends NonBodyParameterGenerator
{
    /**
     * {@inheritdoc}
     */
    public function generateInputParamStatements($parameter, Expr $queryParamVariable): array
    {
        $arguments = $this->generateInputParamArguments($parameter);

        return [
            new Expr\MethodCall(
                $queryParamVariable,
                'addFormParameter',
                $arguments
            ),
        ];
    }
}
