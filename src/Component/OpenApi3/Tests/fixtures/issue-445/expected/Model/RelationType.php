<?php

namespace PicturePark\API\Model;

class RelationType
{
    /**
     * The ID of the relation type.
     *
     * @var string
     */
    public string $id;
    /**
     * Language specific relation names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * Defines the type of the document target of the relation. Currently supported: Content, ListItem.
     *
     * @var string
     */
    public string $targetDocType;
    /**
     * An optional filter to limit the documents of type TargetDocType.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
}