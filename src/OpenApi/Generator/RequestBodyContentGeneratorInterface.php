<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExample;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExamples;

interface RequestBodyContentGeneratorInterface
{
    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     *
     * @return array
     */
    public function getTypes($content): array;

    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     */
    public function getTypeCondition($content, $reference, Context $context);

    /**
     * @param MediaTypeWithExample|MediaTypeWithExamples $content
     */
    public function getSerializeStatements($content, $contentType, $reference, Context $context);
}
