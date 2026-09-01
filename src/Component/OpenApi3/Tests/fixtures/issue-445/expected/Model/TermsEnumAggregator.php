<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TermsEnumAggregator extends AggregatorBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's ID to execute the aggregation on. Only not analyzed fields are supported.
     *
     * @var string
     */
    public string $field;
    /**
     * It defines how many term buckets should be returned out of the overall terms list.
     *
     * @var int|null
     */
    public ?int $size;
    /**
     * Includes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var list<string>|null
     */
    public ?array $includes;
    /**
     * Excludes values for which buckets will be created. Supports regular expression strings or arrays of exact values.
     *
     * @var list<string>|null
     */
    public ?array $excludes;
    /**
     * Limits the possible returned aggregation values by using a query string filter. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    public ?string $searchString;
    /**
     * Search fields to be used to search the SearchString value into. If no search field is specified, the Field value is used.
     *
     * @var list<string>|null
     */
    public ?array $searchFields;
    /**
     * Type of the enum target of the relation. It is used to resolve the enum translation.
     *
     * @var string
     */
    public string $enumType;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'size' => 'size', 'includes' => 'includes', 'excludes' => 'excludes', 'searchString' => 'searchString', 'searchFields' => 'searchFields', 'enumType' => 'enumType'];
    }
}