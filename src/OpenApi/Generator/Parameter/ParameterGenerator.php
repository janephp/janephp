<?php

namespace Jane\OpenApi\Generator\Parameter;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\Parameter;
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
     * @param Parameter $parameter
     * @param Context   $context
     *
     * @return Node\Param|null
     */
    public function generateMethodParameter(Parameter $parameter, Context $context, $reference)
    {
        return null;
    }

    /**
     * @param Parameter $parameter
     * @param Context   $context
     *
     * @return string
     */
    public function generateMethodDocParameter(Parameter $parameter, Context $context, $reference)
    {
        return '';
    }

    /**
     * @param Parameter $parameter
     *
     * @return Node\Expr[]
     */
    protected function generateInputParamArguments(Parameter $parameter): array
    {
        return [];
    }
}
