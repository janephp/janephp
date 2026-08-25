<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TakeArrayValueTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
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
     * Index of the item.
     *
     * @var string|null
     */
    protected $index;
    /**
     * Index of the item.
     *
     * @return string|null
     */
    public function getIndex(): ?string
    {
        return $this->index;
    }
    /**
     * Index of the item.
     *
     * @param string|null $index
     *
     * @return self
     */
    public function setIndex(?string $index): self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['index' => ['index', 'getIndex', 'setIndex']];
    }
}