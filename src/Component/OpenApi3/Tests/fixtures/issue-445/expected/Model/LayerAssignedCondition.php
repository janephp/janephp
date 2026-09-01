<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LayerAssignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Layer id to match on.
     *
     * @var string|null
     */
    public ?string $layerId;
    public function definedProperties(): array
    {
        return ['layerId' => 'layerId'];
    }
}