<?php

namespace PicturePark\API\Model;

class SchemaUpdateResult
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
     * The details of the updated schema.
     *
     * @var SchemaDetail|null
     */
    protected $schema;
    /**
     * The details of the updated schema.
     *
     * @return SchemaDetail|null
     */
    public function getSchema(): ?SchemaDetail
    {
        return $this->schema;
    }
    /**
     * The details of the updated schema.
     *
     * @param SchemaDetail|null $schema
     *
     * @return self
     */
    public function setSchema(?SchemaDetail $schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;
        return $this;
    }
}