<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SplitTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Separators to use, supports variables, an array of strings including escape sequences or null to split on any white space character.
     *
     * @var mixed|null
     */
    public $separators;
    /**
     * Keeps empty items. Empty items will be returned as empty strings.
     *
     * @var bool
     */
    public bool $keepEmpty;
    /**
     * Trims each entry for punctuation and white space.
     *
     * @var bool
     */
    public bool $trim;
    public function definedProperties(): array
    {
        return ['separators' => 'separators', 'keepEmpty' => 'keepEmpty', 'trim' => 'trim'];
    }
}