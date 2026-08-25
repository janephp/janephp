<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NotCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
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
     * Inner condition.
     *
     * @var mixed|null
     */
    protected $condition;
    /**
     * Inner condition.
     *
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * Inner condition.
     *
     * @param mixed $condition
     *
     * @return self
     */
    public function setCondition($condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['condition' => ['condition', 'getCondition', 'setCondition']];
    }
}