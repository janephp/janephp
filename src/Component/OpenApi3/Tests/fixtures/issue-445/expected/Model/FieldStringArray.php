<?php

namespace PicturePark\API\Model;

class FieldStringArray extends FieldBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @var string|null
     */
    protected $template;
    /**
     * Contains a regex validation pattern.
     *
     * @var string|null
     */
    protected $pattern;
    /**
     * The minimum string's lenght.
     *
     * @var int|null
     */
    protected $minimumLength;
    /**
     * The maximum string's length.
     *
     * @var int|null
     */
    protected $maximumLength;
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @var AnalyzerBase[]|null
    */
    protected $indexAnalyzers;
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @var AnalyzerBase[]|null
    */
    protected $simpleSearchAnalyzers;
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @var bool
     */
    protected $multiLine;
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @var string[]|null
     */
    protected $grantedValues;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    protected $boost = 1;
    /**
     * The maximum number of items that can be stored.
     *
     * @var int|null
     */
    protected $maximumItems;
    /**
     * The minimum number of items that must be stored.
     *
     * @var int|null
     */
    protected $minimumItems;
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @return string|null
     */
    public function getTemplate() : ?string
    {
        return $this->template;
    }
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     *
     * @param string|null $template
     *
     * @return self
     */
    public function setTemplate(?string $template) : self
    {
        $this->initialized['template'] = true;
        $this->template = $template;
        return $this;
    }
    /**
     * Contains a regex validation pattern.
     *
     * @return string|null
     */
    public function getPattern() : ?string
    {
        return $this->pattern;
    }
    /**
     * Contains a regex validation pattern.
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
     * The minimum string's lenght.
     *
     * @return int|null
     */
    public function getMinimumLength() : ?int
    {
        return $this->minimumLength;
    }
    /**
     * The minimum string's lenght.
     *
     * @param int|null $minimumLength
     *
     * @return self
     */
    public function setMinimumLength(?int $minimumLength) : self
    {
        $this->initialized['minimumLength'] = true;
        $this->minimumLength = $minimumLength;
        return $this;
    }
    /**
     * The maximum string's length.
     *
     * @return int|null
     */
    public function getMaximumLength() : ?int
    {
        return $this->maximumLength;
    }
    /**
     * The maximum string's length.
     *
     * @param int|null $maximumLength
     *
     * @return self
     */
    public function setMaximumLength(?int $maximumLength) : self
    {
        $this->initialized['maximumLength'] = true;
        $this->maximumLength = $maximumLength;
        return $this;
    }
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @return AnalyzerBase[]|null
    */
    public function getIndexAnalyzers() : ?array
    {
        return $this->indexAnalyzers;
    }
    /**
    * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the Index property is set to true.
    *
    * @param AnalyzerBase[]|null $indexAnalyzers
    *
    * @return self
    */
    public function setIndexAnalyzers(?array $indexAnalyzers) : self
    {
        $this->initialized['indexAnalyzers'] = true;
        $this->indexAnalyzers = $indexAnalyzers;
        return $this;
    }
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @return AnalyzerBase[]|null
    */
    public function getSimpleSearchAnalyzers() : ?array
    {
        return $this->simpleSearchAnalyzers;
    }
    /**
    * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
    The analyzers are applied only if the SimpleSearch property is set to true.
    *
    * @param AnalyzerBase[]|null $simpleSearchAnalyzers
    *
    * @return self
    */
    public function setSimpleSearchAnalyzers(?array $simpleSearchAnalyzers) : self
    {
        $this->initialized['simpleSearchAnalyzers'] = true;
        $this->simpleSearchAnalyzers = $simpleSearchAnalyzers;
        return $this;
    }
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @return bool
     */
    public function getMultiLine() : bool
    {
        return $this->multiLine;
    }
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @param bool $multiLine
     *
     * @return self
     */
    public function setMultiLine(bool $multiLine) : self
    {
        $this->initialized['multiLine'] = true;
        $this->multiLine = $multiLine;
        return $this;
    }
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @return string[]|null
     */
    public function getGrantedValues() : ?array
    {
        return $this->grantedValues;
    }
    /**
     * If values are stored in this list, field values are limited to these ones.
     *
     * @param string[]|null $grantedValues
     *
     * @return self
     */
    public function setGrantedValues(?array $grantedValues) : self
    {
        $this->initialized['grantedValues'] = true;
        $this->grantedValues = $grantedValues;
        return $this;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @return float
     */
    public function getBoost() : float
    {
        return $this->boost;
    }
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @param float $boost
     *
     * @return self
     */
    public function setBoost(float $boost) : self
    {
        $this->initialized['boost'] = true;
        $this->boost = $boost;
        return $this;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @return int|null
     */
    public function getMaximumItems() : ?int
    {
        return $this->maximumItems;
    }
    /**
     * The maximum number of items that can be stored.
     *
     * @param int|null $maximumItems
     *
     * @return self
     */
    public function setMaximumItems(?int $maximumItems) : self
    {
        $this->initialized['maximumItems'] = true;
        $this->maximumItems = $maximumItems;
        return $this;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @return int|null
     */
    public function getMinimumItems() : ?int
    {
        return $this->minimumItems;
    }
    /**
     * The minimum number of items that must be stored.
     *
     * @param int|null $minimumItems
     *
     * @return self
     */
    public function setMinimumItems(?int $minimumItems) : self
    {
        $this->initialized['minimumItems'] = true;
        $this->minimumItems = $minimumItems;
        return $this;
    }
}