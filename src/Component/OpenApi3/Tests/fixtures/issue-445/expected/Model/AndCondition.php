<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AndCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The conditions.
     *
     * @var list<BusinessRuleCondition>|null
     */
    public ?array $conditions;
    public function definedProperties(): array
    {
        return ['conditions' => 'conditions'];
    }
}