<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateKnowledgeBaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Knowledgebase Description
     *
     * @var ApiKnowledgeBase
     */
    public ApiKnowledgeBase $knowledgeBase;
    public function definedProperties(): array
    {
        return ['knowledgeBase' => 'knowledge_base'];
    }
}