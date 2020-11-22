<?php

namespace PicturePark\API\Model;

class SchemaCreateResult
{
    /**
     * The details of the created schema.
     *
     * @var mixed|null
     */
    protected $schema;
    /**
     * The details of the created schema.
     *
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * The details of the created schema.
     *
     * @param mixed $schema
     *
     * @return self
     */
    public function setSchema($schema) : self
    {
        $this->schema = $schema;
        return $this;
    }
}