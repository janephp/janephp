<?php

namespace PicturePark\API\Model;

class SchemaUpdateManyRequest
{
    /**
     * The schemas to update.
     *
     * @var SchemaUpdateItem[]
     */
    protected $schemas;
    /**
     * The schemas to update.
     *
     * @return SchemaUpdateItem[]
     */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
     * The schemas to update.
     *
     * @param SchemaUpdateItem[] $schemas
     *
     * @return self
     */
    public function setSchemas(array $schemas) : self
    {
        $this->schemas = $schemas;
        return $this;
    }
}