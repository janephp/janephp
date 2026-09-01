<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnassignLayerAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the layer.
     *
     * @var string|null
     */
    public ?string $layerId;
    public function definedProperties(): array
    {
        return ['layerId' => 'layerId'];
    }
}