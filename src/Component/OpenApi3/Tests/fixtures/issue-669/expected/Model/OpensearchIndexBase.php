<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchIndexBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the opensearch index.
     *
     * @var string
     */
    public string $indexName;
    /**
     * The number of shards for the index.
     *
     * @var int
     */
    public int $numberOfShards;
    /**
     * The number of replicas for the index.
     *
     * @var int
     */
    public int $numberOfReplicas;
    /**
     * The size of the index.
     *
     * @var int
     */
    public int $size;
    /**
     * The date and time the index was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdTime;
    public function definedProperties(): array
    {
        return ['indexName' => 'index_name', 'numberOfShards' => 'number_of_shards', 'numberOfReplicas' => 'number_of_replicas', 'size' => 'size', 'createdTime' => 'created_time'];
    }
}