<?php

namespace Github\Model;

class UserKeysPostBody extends \ArrayObject
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
     * A descriptive name for the new key.
     *
     * @var string
     */
    protected $title;
    /**
     * The public SSH key to add to your GitHub account.
     *
     * @var string
     */
    protected $key;
    /**
     * A descriptive name for the new key.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * A descriptive name for the new key.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The public SSH key to add to your GitHub account.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The public SSH key to add to your GitHub account.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}