<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetKnowledgeBaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $databaseStatus = 'CREATING';
    /**
     * Knowledgebase Description
     *
     * @var ApiKnowledgeBase
     */
    public ApiKnowledgeBase $knowledgeBase;
    public function definedProperties(): array
    {
        return ['databaseStatus' => 'database_status', 'knowledgeBase' => 'knowledge_base'];
    }
}