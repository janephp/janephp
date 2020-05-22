<?php

namespace Jane\OpenApiCommon\Generator\Parameter;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Jane\JsonSchema\Generator\Context\Context;
use PhpParser\Node;
use PhpParser\Parser;

abstract class ParameterGenerator
{
    /**
     * @var Parser
     */
    protected $parser;

    private $inflector = null;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    protected function getInflector(): Inflector
    {
        if (null === $this->inflector) {
            $this->inflector = InflectorFactory::create()->build();
        }

        return $this->inflector;
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
