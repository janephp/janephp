<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiDeleteKnowledgeBaseDataSourceOutput extends \ArrayObject
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
     * Data source id
     *
     * @var string
     */
    protected $dataSourceUuid;
    /**
     * Knowledge base id
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
    /**
     * Data source id
     *
     * @return string
     */
    public function getDataSourceUuid(): string
    {
        return $this->dataSourceUuid;
    }
    /**
     * Data source id
     *
     * @param string $dataSourceUuid
     *
     * @return self
     */
    public function setDataSourceUuid(string $dataSourceUuid): self
    {
        $this->initialized['dataSourceUuid'] = true;
        $this->dataSourceUuid = $dataSourceUuid;
        return $this;
    }
    /**
     * Knowledge base id
     *
     * @return string
     */
    public function getKnowledgeBaseUuid(): string
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Knowledge base id
     *
     * @param string $knowledgeBaseUuid
     *
     * @return self
     */
    public function setKnowledgeBaseUuid(string $knowledgeBaseUuid): self
    {
        $this->initialized['knowledgeBaseUuid'] = true;
        $this->knowledgeBaseUuid = $knowledgeBaseUuid;
        return $this;
    }
}