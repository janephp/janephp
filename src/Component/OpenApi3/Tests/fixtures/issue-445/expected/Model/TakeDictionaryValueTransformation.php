<?php

namespace PicturePark\API\Model;

class TakeDictionaryValueTransformation extends BusinessRuleTransformation
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Key of the item.
     *
     * @var string|null
     */
    protected $key;
    /**
     * Key of the item.
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * Key of the item.
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}