<?php

namespace Jane\Generated\DigitalOcean\Model;

class Destination extends \ArrayObject
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
     * A unique identifier for a destination.
     *
     * @var string
     */
    protected $id;
    /**
     * destination name
     *
     * @var string
     */
    protected $name;
    /**
     * The destination type. `opensearch_dbaas` for a DigitalOcean managed OpenSearch
     * cluster or `opensearch_ext` for an externally managed one.
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * @var OpensearchConfig
     */
    protected $config;
    /**
     * A unique identifier for a destination.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique identifier for a destination.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * destination name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * destination name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The destination type. `opensearch_dbaas` for a DigitalOcean managed OpenSearch
     * cluster or `opensearch_ext` for an externally managed one.
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
    * The destination type. `opensearch_dbaas` for a DigitalOcean managed OpenSearch
    cluster or `opensearch_ext` for an externally managed one.
    
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return OpensearchConfig
     */
    public function getConfig(): OpensearchConfig
    {
        return $this->config;
    }
    /**
     * @param OpensearchConfig $config
     *
     * @return self
     */
    public function setConfig(OpensearchConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}