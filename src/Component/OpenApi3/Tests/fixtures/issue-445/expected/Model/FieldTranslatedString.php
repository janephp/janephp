<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldTranslatedString extends FieldBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Contains a regex validation pattern.
     *
     * @var string|null
     */
    public ?string $pattern;
    /**
     * The minimum string's lenght.
     *
     * @var int|null
     */
    public ?int $minimumLength;
    /**
     * The maximum string's length.
     *
     * @var int|null
     */
    public ?int $maximumLength;
    /**
     * Defines how the value must be analyzed for filtering by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
     * The analyzers are applied only if the Index property is set to true.
     *
     * @var list<AnalyzerBase>|null
     */
    public ?array $indexAnalyzers;
    /**
     * Defines how the value must be analyzed for searches by ElasticSearch. A string field can have multiple analyzers, but only one per analyzer type.
     * The analyzers are applied only if the SimpleSearch property is set to true.
     *
     * @var list<AnalyzerBase>|null
     */
    public ?array $simpleSearchAnalyzers;
    /**
     * Defines that the field value must be displayed in a multiline component.
     *
     * @var bool
     */
    public bool $multiLine;
    /**
     * Sets the required metadata languages for the translation field. The langauge configuration limits the available metadata languages.
     * If Required is true, the field and all its metadata languages are required.
     * If Required is false, the field can be left empty, but as soon as a value is entered all required metadata languages are mandatory.
     *
     * @var list<string>|null
     */
    public ?array $requiredMetadataLanguages;
    /**
     * A DotLiquid template. If set, it transforms the field in a calculated field, so that its value is calculated based on this template.
     * 
     *
     * @var string|null
     */
    public ?string $template;
    /**
     * Value to prioritize search results. Set to 1 by default. Ignored if SimpleSearch not set to true.
     *
     * @var float
     */
    public float $boost = 1;
    public function definedProperties(): array
    {
        return ['pattern' => 'pattern', 'minimumLength' => 'minimumLength', 'maximumLength' => 'maximumLength', 'indexAnalyzers' => 'indexAnalyzers', 'simpleSearchAnalyzers' => 'simpleSearchAnalyzers', 'multiLine' => 'multiLine', 'requiredMetadataLanguages' => 'requiredMetadataLanguages', 'template' => 'template', 'boost' => 'boost'];
    }
}