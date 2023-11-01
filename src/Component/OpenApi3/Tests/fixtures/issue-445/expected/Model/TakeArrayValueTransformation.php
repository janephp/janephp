<?php

namespace PicturePark\API\Model;

class TakeArrayValueTransformation extends BusinessRuleTransformation
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
    public function getIndex() : ?string
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
    public function setIndex(?string $index) : self
    {
        $this->initialized['index'] = true;
        $this->index = $index;
        return $this;
    }
}