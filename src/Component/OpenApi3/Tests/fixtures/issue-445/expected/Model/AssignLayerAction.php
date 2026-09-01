<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignLayerAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the layer.
     *
     * @var string|null
     */
    public ?string $layerId;
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @var array<string, mixed>|null
     */
    public ?iterable $defaultValues;
    public function definedProperties(): array
    {
        return ['layerId' => 'layerId', 'defaultValues' => 'defaultValues'];
    }
}