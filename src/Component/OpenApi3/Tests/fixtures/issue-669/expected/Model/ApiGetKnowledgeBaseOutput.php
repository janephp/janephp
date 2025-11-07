<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiGetKnowledgeBaseOutput extends \ArrayObject
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
     * @var string
     */
    protected $databaseStatus = 'CREATING';
    /**
     * Knowledgebase Description
     *
     * @var ApiKnowledgeBase
     */
    protected $knowledgeBase;
    /**
     * @return string
     */
    public function getDatabaseStatus(): string
    {
        return $this->databaseStatus;
    }
    /**
     * @param string $databaseStatus
     *
     * @return self
     */
    public function setDatabaseStatus(string $databaseStatus): self
    {
        $this->initialized['databaseStatus'] = true;
        $this->databaseStatus = $databaseStatus;
        return $this;
    }
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