<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiUpdateKnowledgeBaseOutput extends \ArrayObject
{
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
}