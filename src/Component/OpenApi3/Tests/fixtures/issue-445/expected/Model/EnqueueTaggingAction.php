<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class EnqueueTaggingAction extends BusinessRuleAction implements AdditionalPropertiesInterface
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
     * Options to use while tagging.
     *
     * @var mixed|null
     */
    protected $options;
    /**
     * Options to use while tagging.
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Options to use while tagging.
     *
     * @param mixed $options
     *
     * @return self
     */
    public function setOptions($options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['options' => ['options', 'getOptions', 'setOptions']];
    }
}