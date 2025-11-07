<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCancelKnowledgeBaseIndexingJobInputPublic extends \ArrayObject
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
     * A unique identifier for an indexing job.
     *
     * @var string
     */
    protected $uuid;
    /**
     * A unique identifier for an indexing job.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * A unique identifier for an indexing job.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
}