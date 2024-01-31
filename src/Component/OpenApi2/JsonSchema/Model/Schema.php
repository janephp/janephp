<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class Schema extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var bool|null
     */
    protected $exclusiveMaximum = false;
    /**
     * 
     *
     * @var float|null
     */
    protected $minimum;
    /**
     * 
     *
     * @var bool|null
     */
    protected $exclusiveMinimum = false;
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
    protected $required;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $enum;
    /**
     * 
     *
     * @var Schema|bool|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var mixed|mixed[]|null
     */
    protected $type;
    /**
     * 
     *
     * @var Schema[]|Schema|null
     */
    protected $items;
    /**
     * 
     *
     * @var Schema[]|null
     */
    protected $allOf;
    /**
     * 
     *
     * @var array<string, Schema>|null
     */
    protected $properties;
    /**
     * 
     *
     * @var string|null
     */
    protected $discriminator;
    /**
     * 
     *
     * @var bool|null
     */
    protected $readOnly = false;
    /**
     * 
     *
     * @var Xml|null
     */
    protected $xml;
    /**
     * information about external documentation
     *
     * @var ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $example;
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
        $this->initialized['dollarRef'] = true;
        $this->dollarRef = $dollarRef;
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
        $this->initialized['format'] = true;
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
        $this->initialized['title'] = true;
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
        $this->initialized['description'] = true;
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
        $this->initialized['default'] = true;
        $this->default = $default;
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
        $this->initialized['multipleOf'] = true;
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
        $this->initialized['maximum'] = true;
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExclusiveMaximum() : ?bool
    {
        return $this->exclusiveMaximum;
    }
    /**
     * 
     *
     * @param bool|null $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum(?bool $exclusiveMaximum) : self
    {
        $this->initialized['exclusiveMaximum'] = true;
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
        $this->initialized['minimum'] = true;
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExclusiveMinimum() : ?bool
    {
        return $this->exclusiveMinimum;
    }
    /**
     * 
     *
     * @param bool|null $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum(?bool $exclusiveMinimum) : self
    {
        $this->initialized['exclusiveMinimum'] = true;
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
        $this->initialized['maxLength'] = true;
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
        $this->initialized['minLength'] = true;
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
        $this->initialized['pattern'] = true;
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
        $this->initialized['maxItems'] = true;
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
        $this->initialized['minItems'] = true;
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
        $this->initialized['uniqueItems'] = true;
        $this->uniqueItems = $uniqueItems;
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
        $this->initialized['maxProperties'] = true;
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
        $this->initialized['minProperties'] = true;
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
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * 
     *
     * @param mixed[]|null $enum
     *
     * @return self
     */
    public function setEnum(?array $enum) : self
    {
        $this->initialized['enum'] = true;
        $this->enum = $enum;
        return $this;
    }
    /**
     * 
     *
     * @return Schema|bool|null
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param Schema|bool|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties) : self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
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
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return Schema[]|Schema|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param Schema[]|Schema|null $items
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return Schema[]|null
     */
    public function getAllOf() : ?array
    {
        return $this->allOf;
    }
    /**
     * 
     *
     * @param Schema[]|null $allOf
     *
     * @return self
     */
    public function setAllOf(?array $allOf) : self
    {
        $this->initialized['allOf'] = true;
        $this->allOf = $allOf;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Schema>|null
     */
    public function getProperties() : ?iterable
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param array<string, Schema>|null $properties
     *
     * @return self
     */
    public function setProperties(?iterable $properties) : self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscriminator() : ?string
    {
        return $this->discriminator;
    }
    /**
     * 
     *
     * @param string|null $discriminator
     *
     * @return self
     */
    public function setDiscriminator(?string $discriminator) : self
    {
        $this->initialized['discriminator'] = true;
        $this->discriminator = $discriminator;
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
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return Xml|null
     */
    public function getXml() : ?Xml
    {
        return $this->xml;
    }
    /**
     * 
     *
     * @param Xml|null $xml
     *
     * @return self
     */
    public function setXml(?Xml $xml) : self
    {
        $this->initialized['xml'] = true;
        $this->xml = $xml;
        return $this;
    }
    /**
     * information about external documentation
     *
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * information about external documentation
     *
     * @param ExternalDocs|null $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : self
    {
        $this->initialized['externalDocs'] = true;
        $this->externalDocs = $externalDocs;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }
    /**
     * 
     *
     * @param mixed $example
     *
     * @return self
     */
    public function setExample($example) : self
    {
        $this->initialized['example'] = true;
        $this->example = $example;
        return $this;
    }
}