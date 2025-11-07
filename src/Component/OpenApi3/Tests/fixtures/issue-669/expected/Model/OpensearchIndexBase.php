<?php

namespace Jane\Generated\DigitalOcean\Model;

class OpensearchIndexBase extends \ArrayObject
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
     * The name of the opensearch index.
     *
     * @var string
     */
    protected $indexName;
    /**
     * The number of shards for the index.
     *
     * @var int
     */
    protected $numberOfShards;
    /**
     * The number of replicas for the index.
     *
     * @var int
     */
    protected $numberOfReplicas;
    /**
     * The size of the index.
     *
     * @var int
     */
    protected $size;
    /**
     * The date and time the index was created.
     *
     * @var \DateTime
     */
    protected $createdTime;
    /**
     * The name of the opensearch index.
     *
     * @return string
     */
    public function getIndexName(): string
    {
        return $this->indexName;
    }
    /**
     * The name of the opensearch index.
     *
     * @param string $indexName
     *
     * @return self
     */
    public function setIndexName(string $indexName): self
    {
        $this->initialized['indexName'] = true;
        $this->indexName = $indexName;
        return $this;
    }
    /**
     * The number of shards for the index.
     *
     * @return int
     */
    public function getNumberOfShards(): int
    {
        return $this->numberOfShards;
    }
    /**
     * The number of shards for the index.
     *
     * @param int $numberOfShards
     *
     * @return self
     */
    public function setNumberOfShards(int $numberOfShards): self
    {
        $this->initialized['numberOfShards'] = true;
        $this->numberOfShards = $numberOfShards;
        return $this;
    }
    /**
     * The number of replicas for the index.
     *
     * @return int
     */
    public function getNumberOfReplicas(): int
    {
        return $this->numberOfReplicas;
    }
    /**
     * The number of replicas for the index.
     *
     * @param int $numberOfReplicas
     *
     * @return self
     */
    public function setNumberOfReplicas(int $numberOfReplicas): self
    {
        $this->initialized['numberOfReplicas'] = true;
        $this->numberOfReplicas = $numberOfReplicas;
        return $this;
    }
    /**
     * The size of the index.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * The size of the index.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The date and time the index was created.
     *
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }
    /**
     * The date and time the index was created.
     *
     * @param \DateTime $createdTime
     *
     * @return self
     */
    public function setCreatedTime(\DateTime $createdTime): self
    {
        $this->initialized['createdTime'] = true;
        $this->createdTime = $createdTime;
        return $this;
    }
}