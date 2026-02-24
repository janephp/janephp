<?php

namespace PicturePark\API\Model;

class EnqueueTaggingAction extends BusinessRuleAction
{
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
}