<?php

namespace Jane\OpenApi2\Generator\Parameter;

use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Parser;

abstract class ParameterGenerator
{
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
     *
     * @return Node\Param|null
     */
    public function generateMethodParameter($parameter, Context $context, $reference)
    {
        return null;
    }

    /**
     * @param $parameter
     *
     * @return string
     */
    public function generateMethodDocParameter($parameter, Context $context, $reference)
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
