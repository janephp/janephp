<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiStartKnowledgeBaseIndexingJobInputPublic extends \ArrayObject
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
     * List of data source ids to index, if none are provided, all data sources will be indexed
     *
     * @var list<string>
     */
    protected $dataSourceUuids;
    /**
     * Knowledge base id
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
    /**
     * List of data source ids to index, if none are provided, all data sources will be indexed
     *
     * @return list<string>
     */
    public function getDataSourceUuids(): array
    {
        return $this->dataSourceUuids;
    }
    /**
     * List of data source ids to index, if none are provided, all data sources will be indexed
     *
     * @param list<string> $dataSourceUuids
     *
     * @return self
     */
    public function setDataSourceUuids(array $dataSourceUuids): self
    {
        $this->initialized['dataSourceUuids'] = true;
        $this->dataSourceUuids = $dataSourceUuids;
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