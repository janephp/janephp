<?php

namespace PicturePark\API\Model;

class IndexField
{
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * The field id.
     *
     * @var string|null
     */
    public ?string $fieldId;
    /**
     * The field's type name.
     *
     * @var string|null
     */
    public ?string $type;
    /**
     * Contains all index field name variants of the field.
     *
     * @var array<string, string>|null
     */
    public ?iterable $indexFields;
    /**
     * Contains all simple search field name variants of the field.
     * The amount of simple search fields can be equal or less to the amount of IndexFields, but never more.
     *
     * @var array<string, string>|null
     */
    public ?iterable $simpleSearchFields;
    /**
     * Contains the fields boost value.
     *
     * @var float
     */
    public float $boost;
    /**
     * Not to be returned for search query, but only used for mapping purposes
     *
     * @var bool
     */
    public bool $ignoreForSearch;
    /**
     * The path of the Nested document this property belongs to. If set to null, it means that there is no Nested document
     *
     * @var string|null
     */
    public ?string $nestedPath;
    /**
     * Path to the sorting information in the DataSortValuesField sort index.
     *
     * @var string|null
     */
    public ?string $sortField;
}