<?php

namespace Jane\Component\OpenApiCommon\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
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

    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        return null;
    }

    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        return '';
    }

    /**
     * @return Node\Expr[]
     */
    protected function generateInputParamArguments($parameter): array
    {
        return [];
    }
}
