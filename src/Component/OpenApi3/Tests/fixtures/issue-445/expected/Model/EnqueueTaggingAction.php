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
     * @var TaggingOptionsBase|null
     */
    protected $options;
    /**
     * Options to use while tagging.
     *
     * @return TaggingOptionsBase|null
     */
    public function getOptions(): ?TaggingOptionsBase
    {
        return $this->options;
    }
    /**
     * Options to use while tagging.
     *
     * @param TaggingOptionsBase|null $options
     *
     * @return self
     */
    public function setOptions(?TaggingOptionsBase $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}