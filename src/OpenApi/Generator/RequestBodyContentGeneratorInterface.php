<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExample;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExamples;
use PhpParser\Node;

interface RequestBodyContentGeneratorInterface
{
    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     */
    public function getTypes($content, string $reference, Context $context): array;

    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     */
    public function getTypeCondition($content, string $reference, Context $context): Node;

    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     */
    public function getSerializeStatements($content, string $contentType, string $reference, Context $context): array;
}
