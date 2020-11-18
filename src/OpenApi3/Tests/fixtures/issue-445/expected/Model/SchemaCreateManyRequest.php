<?php

namespace PicturePark\API\Model;

class SchemaCreateManyRequest
{
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
        $this->schemas = $schemas;
        return $this;
    }
}