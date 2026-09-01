<?php

namespace PicturePark\API\Model;

class XmpMappingEntryCreateManyRequest
{
    /**
     * Mappings to create.
     *
     * @var list<XmpMappingEntryCreateRequest>|null
     */
    public ?array $items;
}