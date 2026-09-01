<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NGramAnalyzer extends AnalyzerBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The analyzer type: NGram
     *
     * @var string
     */
    public string $type;
    /**
     * The suffix for the analyzed field: ngram.
     *
     * @var string|null
     */
    public ?string $fieldSuffix;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'fieldSuffix' => 'fieldSuffix'];
    }
}