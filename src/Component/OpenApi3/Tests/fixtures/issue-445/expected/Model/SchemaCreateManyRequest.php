<?php

namespace PicturePark\API\Model;

class SchemaCreateManyRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The schemas to create. Cyclic dependencies between schemas are supported, if they
    are all in the same request.
    *
    * @var SchemaCreateRequest[]
    */
    protected $schemas;
    /**
    * The schemas to create. Cyclic dependencies between schemas are supported, if they
    are all in the same request.
    *
    * @return SchemaCreateRequest[]
    */
    public function getSchemas() : array
    {
        return $this->schemas;
    }
    /**
    * The schemas to create. Cyclic dependencies between schemas are supported, if they
    are all in the same request.
    *
    * @param SchemaCreateRequest[] $schemas
    *
    * @return self
    */
    public function setSchemas(array $schemas) : self
    {
        $this->initialized['schemas'] = true;
        $this->schemas = $schemas;
        return $this;
    }
}