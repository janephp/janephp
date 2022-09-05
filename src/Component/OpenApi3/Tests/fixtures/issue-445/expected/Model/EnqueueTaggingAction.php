<?php

namespace PicturePark\API\Model;

class EnqueueTaggingAction extends BusinessRuleAction
{
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
    public function setOptions($options) : self
    {
        $this->options = $options;
        return $this;
    }
}