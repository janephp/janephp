<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateKnowledgeBaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Knowledgebase Description
     *
     * @var ApiKnowledgeBase
     */
    protected $knowledgeBase;
    /**
     * Knowledgebase Description
     *
     * @return ApiKnowledgeBase
     */
    public function getKnowledgeBase(): ApiKnowledgeBase
    {
        return $this->knowledgeBase;
    }
    /**
     * Knowledgebase Description
     *
     * @param ApiKnowledgeBase $knowledgeBase
     *
     * @return self
     */
    public function setKnowledgeBase(ApiKnowledgeBase $knowledgeBase): self
    {
        $this->initialized['knowledgeBase'] = true;
        $this->knowledgeBase = $knowledgeBase;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['knowledgeBase' => ['knowledge_base', 'getKnowledgeBase', 'setKnowledgeBase']];
    }
}