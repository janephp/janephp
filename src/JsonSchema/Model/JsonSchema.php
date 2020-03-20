<?php

namespace Jane\JsonSchema\Model;

class JsonSchema
{
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $definitions;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|string[][]|null
     */
    protected $dependencies;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $additionalItems;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $unevaluatedItems;
    /**
     * 
     *
     * @var JsonSchema|bool|JsonSchema[]|bool[]|null
     */
    protected $items;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $contains;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $unevaluatedProperties;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $properties;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $patternProperties;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $dependentSchemas;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $propertyNames;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $if;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $then;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $else;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $allOf;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $anyOf;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $oneOf;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $not;
    /**
     * 
     *
     * @var string|null
     */
    protected $contentMediaType;
    /**
     * 
     *
     * @var string|null
     */
    protected $contentEncoding;
    /**
     * 
     *
     * @var JsonSchema|bool|null
     */
    protected $contentSchema;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarId;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarSchema;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarAnchor;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarRef;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarRecursiveRef;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dollarRecursiveAnchor = false;
    /**
     * 
     *
     * @var bool[]|null
     */
    protected $dollarVocabulary;
    /**
     * 
     *
     * @var string|null
     */
    protected $dollarComment;
    /**
     * 
     *
     * @var JsonSchema[]|bool[]|null
     */
    protected $dollarDefs;
    /**
     * 
     *
     * @var string|null
     */
    protected $format;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $default;
    /**
     * 
     *
     * @var bool|null
     */
    protected $deprecated = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $readOnly = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $writeOnly = false;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $examples;
    /**
     * 
     *
     * @var float|null
     */
    protected $multipleOf;
    /**
     * 
     *
     * @var float|null
     */
    protected $maximum;
    /**
     * 
     *
     * @var float|null
     */
    protected $exclusiveMaximum;
    /**
     * 
     *
     * @var float|null
     */
    protected $minimum;
    /**
     * 
     *
     * @var float|null
     */
    protected $exclusiveMinimum;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxLength;
    /**
     * 
     *
     * @var int|null
     */
    protected $minLength;
    /**
     * 
     *
     * @var string|null
     */
    protected $pattern;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxItems;
    /**
     * 
     *
     * @var int|null
     */
    protected $minItems;
    /**
     * 
     *
     * @var bool|null
     */
    protected $uniqueItems = false;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxContains;
    /**
     * 
     *
     * @var int|null
     */
    protected $minContains;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxProperties;
    /**
     * 
     *
     * @var int|null
     */
    protected $minProperties;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $required = array();
    /**
     * 
     *
     * @var string[][]|null
     */
    protected $dependentRequired;
    /**
     * 
     *
     * @var string|null
     */
    protected $const;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $enum;
    /**
     * 
     *
     * @var mixed|mixed[]|null
     */
    protected $type;
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getDefinitions() : ?\ArrayObject
    {
        return $this->definitions;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $definitions
     *
     * @return self
     */
    public function setDefinitions(?\ArrayObject $definitions) : self
    {
        $this->definitions = $definitions;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|string[][]|null
     */
    public function getDependencies() : ?\ArrayObject
    {
        return $this->dependencies;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|string[][]|null $dependencies
     *
     * @return self
     */
    public function setDependencies(?\ArrayObject $dependencies) : self
    {
        $this->dependencies = $dependencies;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getAdditionalItems()
    {
        return $this->additionalItems;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $additionalItems
     *
     * @return self
     */
    public function setAdditionalItems($additionalItems) : self
    {
        $this->additionalItems = $additionalItems;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getUnevaluatedItems()
    {
        return $this->unevaluatedItems;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $unevaluatedItems
     *
     * @return self
     */
    public function setUnevaluatedItems($unevaluatedItems) : self
    {
        $this->unevaluatedItems = $unevaluatedItems;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|JsonSchema[]|bool[]|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|JsonSchema[]|bool[]|null $items
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getContains()
    {
        return $this->contains;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $contains
     *
     * @return self
     */
    public function setContains($contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties) : self
    {
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getUnevaluatedProperties() : ?\ArrayObject
    {
        return $this->unevaluatedProperties;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $unevaluatedProperties
     *
     * @return self
     */
    public function setUnevaluatedProperties(?\ArrayObject $unevaluatedProperties) : self
    {
        $this->unevaluatedProperties = $unevaluatedProperties;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getProperties() : ?\ArrayObject
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $properties
     *
     * @return self
     */
    public function setProperties(?\ArrayObject $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getPatternProperties() : ?\ArrayObject
    {
        return $this->patternProperties;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $patternProperties
     *
     * @return self
     */
    public function setPatternProperties(?\ArrayObject $patternProperties) : self
    {
        $this->patternProperties = $patternProperties;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getDependentSchemas() : ?\ArrayObject
    {
        return $this->dependentSchemas;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $dependentSchemas
     *
     * @return self
     */
    public function setDependentSchemas(?\ArrayObject $dependentSchemas) : self
    {
        $this->dependentSchemas = $dependentSchemas;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getPropertyNames()
    {
        return $this->propertyNames;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $propertyNames
     *
     * @return self
     */
    public function setPropertyNames($propertyNames) : self
    {
        $this->propertyNames = $propertyNames;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getIf()
    {
        return $this->if;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $if
     *
     * @return self
     */
    public function setIf($if) : self
    {
        $this->if = $if;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getThen()
    {
        return $this->then;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $then
     *
     * @return self
     */
    public function setThen($then) : self
    {
        $this->then = $then;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getElse()
    {
        return $this->else;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $else
     *
     * @return self
     */
    public function setElse($else) : self
    {
        $this->else = $else;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getAllOf() : ?array
    {
        return $this->allOf;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $allOf
     *
     * @return self
     */
    public function setAllOf(?array $allOf) : self
    {
        $this->allOf = $allOf;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getAnyOf() : ?array
    {
        return $this->anyOf;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $anyOf
     *
     * @return self
     */
    public function setAnyOf(?array $anyOf) : self
    {
        $this->anyOf = $anyOf;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getOneOf() : ?array
    {
        return $this->oneOf;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $oneOf
     *
     * @return self
     */
    public function setOneOf(?array $oneOf) : self
    {
        $this->oneOf = $oneOf;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getNot()
    {
        return $this->not;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $not
     *
     * @return self
     */
    public function setNot($not) : self
    {
        $this->not = $not;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContentMediaType() : ?string
    {
        return $this->contentMediaType;
    }
    /**
     * 
     *
     * @param string|null $contentMediaType
     *
     * @return self
     */
    public function setContentMediaType(?string $contentMediaType) : self
    {
        $this->contentMediaType = $contentMediaType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContentEncoding() : ?string
    {
        return $this->contentEncoding;
    }
    /**
     * 
     *
     * @param string|null $contentEncoding
     *
     * @return self
     */
    public function setContentEncoding(?string $contentEncoding) : self
    {
        $this->contentEncoding = $contentEncoding;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema|bool|null
     */
    public function getContentSchema()
    {
        return $this->contentSchema;
    }
    /**
     * 
     *
     * @param JsonSchema|bool|null $contentSchema
     *
     * @return self
     */
    public function setContentSchema($contentSchema) : self
    {
        $this->contentSchema = $contentSchema;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarId() : ?string
    {
        return $this->dollarId;
    }
    /**
     * 
     *
     * @param string|null $dollarId
     *
     * @return self
     */
    public function setDollarId(?string $dollarId) : self
    {
        $this->dollarId = $dollarId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarSchema() : ?string
    {
        return $this->dollarSchema;
    }
    /**
     * 
     *
     * @param string|null $dollarSchema
     *
     * @return self
     */
    public function setDollarSchema(?string $dollarSchema) : self
    {
        $this->dollarSchema = $dollarSchema;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarAnchor() : ?string
    {
        return $this->dollarAnchor;
    }
    /**
     * 
     *
     * @param string|null $dollarAnchor
     *
     * @return self
     */
    public function setDollarAnchor(?string $dollarAnchor) : self
    {
        $this->dollarAnchor = $dollarAnchor;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarRef() : ?string
    {
        return $this->dollarRef;
    }
    /**
     * 
     *
     * @param string|null $dollarRef
     *
     * @return self
     */
    public function setDollarRef(?string $dollarRef) : self
    {
        $this->dollarRef = $dollarRef;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarRecursiveRef() : ?string
    {
        return $this->dollarRecursiveRef;
    }
    /**
     * 
     *
     * @param string|null $dollarRecursiveRef
     *
     * @return self
     */
    public function setDollarRecursiveRef(?string $dollarRecursiveRef) : self
    {
        $this->dollarRecursiveRef = $dollarRecursiveRef;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDollarRecursiveAnchor() : ?bool
    {
        return $this->dollarRecursiveAnchor;
    }
    /**
     * 
     *
     * @param bool|null $dollarRecursiveAnchor
     *
     * @return self
     */
    public function setDollarRecursiveAnchor(?bool $dollarRecursiveAnchor) : self
    {
        $this->dollarRecursiveAnchor = $dollarRecursiveAnchor;
        return $this;
    }
    /**
     * 
     *
     * @return bool[]|null
     */
    public function getDollarVocabulary() : ?\ArrayObject
    {
        return $this->dollarVocabulary;
    }
    /**
     * 
     *
     * @param bool[]|null $dollarVocabulary
     *
     * @return self
     */
    public function setDollarVocabulary(?\ArrayObject $dollarVocabulary) : self
    {
        $this->dollarVocabulary = $dollarVocabulary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDollarComment() : ?string
    {
        return $this->dollarComment;
    }
    /**
     * 
     *
     * @param string|null $dollarComment
     *
     * @return self
     */
    public function setDollarComment(?string $dollarComment) : self
    {
        $this->dollarComment = $dollarComment;
        return $this;
    }
    /**
     * 
     *
     * @return JsonSchema[]|bool[]|null
     */
    public function getDollarDefs() : ?\ArrayObject
    {
        return $this->dollarDefs;
    }
    /**
     * 
     *
     * @param JsonSchema[]|bool[]|null $dollarDefs
     *
     * @return self
     */
    public function setDollarDefs(?\ArrayObject $dollarDefs) : self
    {
        $this->dollarDefs = $dollarDefs;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default) : self
    {
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * 
     *
     * @param bool|null $deprecated
     *
     * @return self
     */
    public function setDeprecated(?bool $deprecated) : self
    {
        $this->deprecated = $deprecated;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getReadOnly() : ?bool
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWriteOnly() : ?bool
    {
        return $this->writeOnly;
    }
    /**
     * 
     *
     * @param bool|null $writeOnly
     *
     * @return self
     */
    public function setWriteOnly(?bool $writeOnly) : self
    {
        $this->writeOnly = $writeOnly;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getExamples() : ?array
    {
        return $this->examples;
    }
    /**
     * 
     *
     * @param mixed[]|null $examples
     *
     * @return self
     */
    public function setExamples(?array $examples) : self
    {
        $this->examples = $examples;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMultipleOf() : ?float
    {
        return $this->multipleOf;
    }
    /**
     * 
     *
     * @param float|null $multipleOf
     *
     * @return self
     */
    public function setMultipleOf(?float $multipleOf) : self
    {
        $this->multipleOf = $multipleOf;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMaximum() : ?float
    {
        return $this->maximum;
    }
    /**
     * 
     *
     * @param float|null $maximum
     *
     * @return self
     */
    public function setMaximum(?float $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExclusiveMaximum() : ?float
    {
        return $this->exclusiveMaximum;
    }
    /**
     * 
     *
     * @param float|null $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum(?float $exclusiveMaximum) : self
    {
        $this->exclusiveMaximum = $exclusiveMaximum;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMinimum() : ?float
    {
        return $this->minimum;
    }
    /**
     * 
     *
     * @param float|null $minimum
     *
     * @return self
     */
    public function setMinimum(?float $minimum) : self
    {
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExclusiveMinimum() : ?float
    {
        return $this->exclusiveMinimum;
    }
    /**
     * 
     *
     * @param float|null $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum(?float $exclusiveMinimum) : self
    {
        $this->exclusiveMinimum = $exclusiveMinimum;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxLength() : ?int
    {
        return $this->maxLength;
    }
    /**
     * 
     *
     * @param int|null $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength) : self
    {
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinLength() : ?int
    {
        return $this->minLength;
    }
    /**
     * 
     *
     * @param int|null $minLength
     *
     * @return self
     */
    public function setMinLength(?int $minLength) : self
    {
        $this->minLength = $minLength;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * 
     *
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern) : self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxItems() : ?int
    {
        return $this->maxItems;
    }
    /**
     * 
     *
     * @param int|null $maxItems
     *
     * @return self
     */
    public function setMaxItems(?int $maxItems) : self
    {
        $this->maxItems = $maxItems;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinItems() : ?int
    {
        return $this->minItems;
    }
    /**
     * 
     *
     * @param int|null $minItems
     *
     * @return self
     */
    public function setMinItems(?int $minItems) : self
    {
        $this->minItems = $minItems;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUniqueItems() : ?bool
    {
        return $this->uniqueItems;
    }
    /**
     * 
     *
     * @param bool|null $uniqueItems
     *
     * @return self
     */
    public function setUniqueItems(?bool $uniqueItems) : self
    {
        $this->uniqueItems = $uniqueItems;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxContains() : ?int
    {
        return $this->maxContains;
    }
    /**
     * 
     *
     * @param int|null $maxContains
     *
     * @return self
     */
    public function setMaxContains(?int $maxContains) : self
    {
        $this->maxContains = $maxContains;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinContains() : ?int
    {
        return $this->minContains;
    }
    /**
     * 
     *
     * @param int|null $minContains
     *
     * @return self
     */
    public function setMinContains(?int $minContains) : self
    {
        $this->minContains = $minContains;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxProperties() : ?int
    {
        return $this->maxProperties;
    }
    /**
     * 
     *
     * @param int|null $maxProperties
     *
     * @return self
     */
    public function setMaxProperties(?int $maxProperties) : self
    {
        $this->maxProperties = $maxProperties;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinProperties() : ?int
    {
        return $this->minProperties;
    }
    /**
     * 
     *
     * @param int|null $minProperties
     *
     * @return self
     */
    public function setMinProperties(?int $minProperties) : self
    {
        $this->minProperties = $minProperties;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRequired() : ?array
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param string[]|null $required
     *
     * @return self
     */
    public function setRequired(?array $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return string[][]|null
     */
    public function getDependentRequired() : ?\ArrayObject
    {
        return $this->dependentRequired;
    }
    /**
     * 
     *
     * @param string[][]|null $dependentRequired
     *
     * @return self
     */
    public function setDependentRequired(?\ArrayObject $dependentRequired) : self
    {
        $this->dependentRequired = $dependentRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConst() : ?string
    {
        return $this->const;
    }
    /**
     * 
     *
     * @param string|null $const
     *
     * @return self
     */
    public function setConst(?string $const) : self
    {
        $this->const = $const;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * 
     *
     * @param string[]|null $enum
     *
     * @return self
     */
    public function setEnum(?array $enum) : self
    {
        $this->enum = $enum;
        return $this;
    }
    /**
     * 
     *
     * @return mixed|mixed[]
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param mixed|mixed[] $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
        return $this;
    }
}