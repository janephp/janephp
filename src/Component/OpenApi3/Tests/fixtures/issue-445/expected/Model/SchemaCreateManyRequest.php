<?php

namespace PicturePark\API\Model;

class SchemaCreateManyRequest
{
    /**
     * The schemas to create. Cyclic dependencies between schemas are supported, if they
     * are all in the same request.
     *
     * @var list<SchemaCreateRequest>
     */
    public array $schemas;
}