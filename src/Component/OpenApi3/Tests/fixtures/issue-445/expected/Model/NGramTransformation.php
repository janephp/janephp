<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NGramTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Maximum size of n-grams to produce.
     * Settings this to 3 will produce unigrams, bigrams, trigrams.
     *
     * @var int
     */
    public int $size;
    /**
     * Minimum length of a word to be considered.
     *
     * @var int
     */
    public int $minWordLength;
    /**
     * Maximum length of a word to be considered.
     *
     * @var int|null
     */
    public ?int $maxWordLength;
    public function definedProperties(): array
    {
        return ['size' => 'size', 'minWordLength' => 'minWordLength', 'maxWordLength' => 'maxWordLength'];
    }
}