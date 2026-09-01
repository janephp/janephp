<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessRuleConfigurable extends BusinessRule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The condition that makes this rule trigger.
     *
     * @var BusinessRuleCondition|null
     */
    public ?BusinessRuleCondition $condition;
    /**
     * Optional transformations to apply.
     *
     * @var list<BusinessRuleTransformationGroup>|null
     */
    public ?array $transformationGroups;
    /**
     * The actions that are performed when this rule triggers.
     *
     * @var list<BusinessRuleAction>|null
     */
    public ?array $actions;
    public function definedProperties(): array
    {
        return ['condition' => 'condition', 'transformationGroups' => 'transformationGroups', 'actions' => 'actions'];
    }
}