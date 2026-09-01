<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class MatchRegexCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    /**
     * Regular expression
     *
     * @var string|null
     */
    public ?string $regex;
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @var string|null
     */
    public ?string $storeIn;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'regex' => 'regex', 'storeIn' => 'storeIn'];
    }
}