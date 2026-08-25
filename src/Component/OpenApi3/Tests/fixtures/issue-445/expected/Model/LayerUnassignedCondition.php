<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LayerUnassignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Layer id to match on.
     *
     * @var string|null
     */
    protected $layerId;
    /**
     * Layer id to match on.
     *
     * @return string|null
     */
    public function getLayerId(): ?string
    {
        return $this->layerId;
    }
    /**
     * Layer id to match on.
     *
     * @param string|null $layerId
     *
     * @return self
     */
    public function setLayerId(?string $layerId): self
    {
        $this->initialized['layerId'] = true;
        $this->layerId = $layerId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['layerId' => ['layerId', 'getLayerId', 'setLayerId']];
    }
}