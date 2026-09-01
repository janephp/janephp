<?php

namespace PicturePark\API\Model;

class SchemaUpdateManyRequest
{
    /**
     * The schemas to update.
     *
     * @var list<SchemaUpdateItem>
     */
    public array $schemas;
}