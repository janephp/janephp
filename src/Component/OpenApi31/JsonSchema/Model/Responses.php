<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Responses extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var mixed|null
     */
    protected $default;

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }
}
