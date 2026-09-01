<?php

namespace Jane\Component\JsonSchema\JsonSchema\Model;

use Jane\Component\JsonSchema\JsonSchema\Runtime\AdditionalAndPatternProperties;
use Jane\Component\JsonSchema\JsonSchema\Runtime\AdditionalPropertiesInterface;
class JsonSchema implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $dollarId;
    /**
     * @var string|null
     */
    public ?string $dollarSchema;
    /**
     * @var string|null
     */
    public ?string $dollarRef;
    /**
     * @var string|null
     */
    public ?string $dollarAnchor;
    /**
     * @var string|null
     */
    public ?string $dollarDynamicRef;
    /**
     * @var string|null
     */
    public ?string $dollarDynamicAnchor;
    /**
     * @var array<string, bool>|null
     */
    public ?iterable $dollarVocabulary;
    /**
     * @var string|null
     */
    public ?string $dollarComment;
    /**
     * @var array<string, JsonSchema|bool>|null
     */
    public ?iterable $dollarDefs;
    /**
     * @var list<JsonSchema>|list<bool>|null
     */
    public ?array $prefixItems;
    /**
     * @var JsonSchema|bool|list<JsonSchema>|list<bool>|null
     */
    public $items;
    /**
     * @var JsonSchema|bool|null
     */
    public $contains;
    /**
     * @var JsonSchema|bool|null
     */
    public $additionalProperties;
    /**
     * @var array<string, JsonSchema|bool>|null
     */
    public ?iterable $properties;
    /**
     * @var array<string, JsonSchema|bool>|null
     */
    public ?iterable $patternProperties;
    /**
     * @var array<string, JsonSchema|bool>|null
     */
    public ?iterable $dependentSchemas;
    /**
     * @var JsonSchema|bool|null
     */
    public $propertyNames;
    /**
     * @var JsonSchema|bool|null
     */
    public $if;
    /**
     * @var JsonSchema|bool|null
     */
    public $then;
    /**
     * @var JsonSchema|bool|null
     */
    public $else;
    /**
     * @var list<JsonSchema>|list<bool>|null
     */
    public ?array $allOf;
    /**
     * @var list<JsonSchema>|list<bool>|null
     */
    public ?array $anyOf;
    /**
     * @var list<JsonSchema>|list<bool>|null
     */
    public ?array $oneOf;
    /**
     * @var JsonSchema|bool|null
     */
    public $not;
    /**
     * @var JsonSchema|bool|null
     */
    public $unevaluatedItems;
    /**
     * @var JsonSchema|bool|null
     */
    public $unevaluatedProperties;
    /**
     * @var mixed|list<mixed>|null
     */
    public $type;
    /**
     * @var mixed|null
     */
    public $const;
    /**
     * @var list<mixed>|null
     */
    public ?array $enum;
    /**
     * @var float|null
     */
    public ?float $multipleOf;
    /**
     * @var float|null
     */
    public ?float $maximum;
    /**
     * @var float|null
     */
    public ?float $exclusiveMaximum;
    /**
     * @var float|null
     */
    public ?float $minimum;
    /**
     * @var float|null
     */
    public ?float $exclusiveMinimum;
    /**
     * @var int|null
     */
    public ?int $maxLength;
    /**
     * @var int|null
     */
    public ?int $minLength;
    /**
     * @var string|null
     */
    public ?string $pattern;
    /**
     * @var int|null
     */
    public ?int $maxItems;
    /**
     * @var int|null
     */
    public ?int $minItems;
    /**
     * @var bool|null
     */
    public ?bool $uniqueItems = false;
    /**
     * @var int|null
     */
    public ?int $maxContains;
    /**
     * @var int|null
     */
    public ?int $minContains;
    /**
     * @var int|null
     */
    public ?int $maxProperties;
    /**
     * @var int|null
     */
    public ?int $minProperties;
    /**
     * @var list<string>|null
     */
    public ?array $required = array();
    /**
     * @var array<string, list<string>>|null
     */
    public ?iterable $dependentRequired;
    /**
     * @var string|null
     */
    public ?string $title;
    /**
     * @var string|null
     */
    public ?string $description;
    /**
     * @var mixed|null
     */
    public $default;
    /**
     * @var bool|null
     */
    public ?bool $deprecated = false;
    /**
     * @var bool|null
     */
    public ?bool $readOnly = false;
    /**
     * @var bool|null
     */
    public ?bool $writeOnly = false;
    /**
     * @var list<mixed>|null
     */
    public ?array $examples;
    /**
     * @var string|null
     */
    public ?string $format;
    /**
     * @var string|null
     */
    public ?string $contentEncoding;
    /**
     * @var string|null
     */
    public ?string $contentMediaType;
    /**
     * @var JsonSchema|bool|null
     */
    public $contentSchema;
    /**
     * @deprecated
     *
     * @var array<string, JsonSchema|bool>|null
     */
    public ?iterable $definitions;
    /**
     * @deprecated
     *
     * @var array<string, JsonSchema|bool|list<string>>|null
     */
    public ?iterable $dependencies;
    /**
     * @deprecated
     *
     * @var bool|null
     */
    public ?bool $dollarRecursiveAnchor = false;
    /**
     * @var string|null
     */
    public ?string $dollarRecursiveRef;
    /**
     * @var JsonSchema|bool|null
     */
    public $additionalItems;
    public function definedProperties(): array
    {
        return ['dollarId' => '$id', 'dollarSchema' => '$schema', 'dollarRef' => '$ref', 'dollarAnchor' => '$anchor', 'dollarDynamicRef' => '$dynamicRef', 'dollarDynamicAnchor' => '$dynamicAnchor', 'dollarVocabulary' => '$vocabulary', 'dollarComment' => '$comment', 'dollarDefs' => '$defs', 'prefixItems' => 'prefixItems', 'items' => 'items', 'contains' => 'contains', 'additionalProperties' => 'additionalProperties', 'properties' => 'properties', 'patternProperties' => 'patternProperties', 'dependentSchemas' => 'dependentSchemas', 'propertyNames' => 'propertyNames', 'if' => 'if', 'then' => 'then', 'else' => 'else', 'allOf' => 'allOf', 'anyOf' => 'anyOf', 'oneOf' => 'oneOf', 'not' => 'not', 'unevaluatedItems' => 'unevaluatedItems', 'unevaluatedProperties' => 'unevaluatedProperties', 'type' => 'type', 'const' => 'const', 'enum' => 'enum', 'multipleOf' => 'multipleOf', 'maximum' => 'maximum', 'exclusiveMaximum' => 'exclusiveMaximum', 'minimum' => 'minimum', 'exclusiveMinimum' => 'exclusiveMinimum', 'maxLength' => 'maxLength', 'minLength' => 'minLength', 'pattern' => 'pattern', 'maxItems' => 'maxItems', 'minItems' => 'minItems', 'uniqueItems' => 'uniqueItems', 'maxContains' => 'maxContains', 'minContains' => 'minContains', 'maxProperties' => 'maxProperties', 'minProperties' => 'minProperties', 'required' => 'required', 'dependentRequired' => 'dependentRequired', 'title' => 'title', 'description' => 'description', 'default' => 'default', 'deprecated' => 'deprecated', 'readOnly' => 'readOnly', 'writeOnly' => 'writeOnly', 'examples' => 'examples', 'format' => 'format', 'contentEncoding' => 'contentEncoding', 'contentMediaType' => 'contentMediaType', 'contentSchema' => 'contentSchema', 'definitions' => 'definitions', 'dependencies' => 'dependencies', 'dollarRecursiveAnchor' => '$recursiveAnchor', 'dollarRecursiveRef' => '$recursiveRef', 'additionalItems' => 'additionalItems'];
    }
}