<?php

namespace Jane\OpenApiCommon\Generator\Parameter;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Tools\InflectorTrait;
use PhpParser\Node;
use PhpParser\Parser;

abstract class ParameterGenerator
{
    use InflectorTrait;

    /**
     * @var Parser
     */
    protected $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        return null;
    }

    /**
     * @param $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        return '';
    }

    /**
     * @param $parameter
     *
     * @return Node\Expr[]
     */
    protected function generateInputParamArguments($parameter): array
    {
        return [];
    }
}
